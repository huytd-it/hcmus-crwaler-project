<?php

namespace App\Http\Controllers;

use App\Models\HoiNghi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;
// Ví dụ: Một controller quản lý xử lý dữ liệu Hội nghị
class HoiNghiController extends Controller
{

    // private $websiteList = [
    //     [
    //         'original_id' => 1,
    //         'original' => 'https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/',
    //         'type' => 'list',
    //         'list_selector' => '.ListItem > .Item',
    //         'title_selector' => '.TitleEvent',
    //         'date_selector' => '.DateEvent',
    //         'host' => 'https://vinasa.org.vn'
    //     ],
    //     []

    // ];

    function index()
    {

        // $this->crawler();

        $this->crawler2();
        // $this->crawler3();
    }
    function crawler2()
    {

        $response = Http::withoutVerifying()
            ->get('https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/');

        $crawler = new Crawler($response);

        $crawler->filter('.ListItem > .Item')
            ->each(function (Crawler $card, $i) {
                $dateTime = explode(" | ", $card->filter('.DateEvent')->innerText());
                $date = explode(" - ", $dateTime[0]);


                $name = $card->filter('.TitleEvent')->text();
                $link  = $card->filter('a')->attr('href');

                if (!Str::contains($link, 'http://') || !Str::contains($link, 'https://')) {
                    $link = "https://vinasa.org.vn" . $link;
                }

                $hoiNghi =  [
                    'ten_hoi_nghi' => $name,
                    'thoi_gian_bat_dau' => isset($date[0]) ? Carbon::createFromFormat('d/m/Y', $date[0]) : null,
                    'thoi_gian_ket_thuc' => isset($date[1]) ? Carbon::createFromFormat('d/m/Y', $date[1]) : null,
                    'dia_diem' => $card->filter('.AddressEvent')->innerText(),
                    'lien_ket' => $link
                ];


                $this->storeOrUpdate($hoiNghi);

                return $hoiNghi;
            });



        echo "https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/";
    }


    public function storeOrUpdate($hoiNghi)
    {
        $checkName = DB::table('hoi_nghi')->where('lien_ket', $hoiNghi['lien_ket'])
            ->whereRaw("UPPER(ten_hoi_nghi) = UPPER('{$hoiNghi['ten_hoi_nghi']}')")->first();
        //Xử dụng Model HoiNghi để lưu dữ liệu vào Database
        if (!isset($checkName->hoi_nghi_id)) {
            HoiNghi::create($hoiNghi);
        } else {

            $hoiNghiUpdate = HoiNghi::findOrFail($checkName->hoi_nghi_id);
            $hoiNghiUpdate->update($hoiNghi);
        }
    }
    public function crawler()
    {

        $response = Http::withoutVerifying()->get('https://digiday.com/events/');
        $crawler = new Crawler($response);

        $crawler->filter('#list ul li')->each(function (Crawler $item, $i) {
            $host = 'https://digiday.com';

            $dateTime = explode(" ", $item->filter('.date')->innerText());
            $endDate = null;
            $startDate = null;
            $month = $dateTime[0];

            if (count($dateTime) == 3) {
                $date = explode("-", trim($dateTime[1], ","));
                $year = isset($dateTime[2]) ? $dateTime[2] : '2024';
                $startDate  = (Carbon::createFromFormat('F j, Y', $month . " " . $date[0] . ", " . $year))->toDateString();

                //Kiểm tra có ngày kết thúc ko
                if (isset($date[1])) {
                    $endDate  = (Carbon::createFromFormat('F j, Y', $month . " " . $date[1] . ", " . $year))->toDateString();
                }
            } else {
                $year = $dateTime[1];
                $startDate  = (Carbon::createFromFormat('F Y', $month  . " " . $year))->toDateString();
            }

            $link = $item->filter('.description  a')->attr('href');

            if (!Str::contains($link, 'http://') && !Str::contains($link, 'https://')) {
                $link = $host . $link;
            }


            if (is_null($endDate)) {
                $endDate = $startDate;
            }

            $address = '';
            if (count($item->filter('.location > div'))) {
                $address = $item->filter('.location > div')->innerText();
            }
            // if($item->filter('.location > div')) {
            //     $address = $address = $item->filter('.location > div')->innerText();
            // }
            $hoiNghi = [
                'ten_hoi_nghi' => $item->filter('.description  a')->text(),
                'thoi_gian_bat_dau' => isset($startDate) ? $startDate : null,
                'thoi_gian_ket_thuc' => isset($endDate) ? $endDate : null,
                'dia_diem' =>  $address,
                'lien_ket' => $link,
                'nguon_id' => 2,
            ];

            $this->storeOrUpdate($hoiNghi);
        });
    }
    public function crawler3()
    {

        $response = Http::withoutVerifying()->get('https://www.psmpartners.com/blog/tech-conference-2024/');
        $crawler = new Crawler($response);


        $data = $crawler->filter('.elementor.elementor-5523 > section')->each(function (Crawler $item, $i) {


            $dataAfterDate = null;
            $startDate = null;
            $endDate = null;
            if ($i > 2) {
                if ($item->filter('.elementor-element > .elementor-widget-container > p')) {


                    $widgetContainer = $item->filter('.elementor-widget-container');

                    // Select the <p> tag containing the "Date:" information
                    $dateParagraph = $widgetContainer->filter('p:contains("Date:")');

                    // Extract and print the text content after "Date:"
                    if ($dateParagraph->count() > 0) {
                        // Get the text content of the <p> tag
                        $dateText = $dateParagraph->text();

                        // Find the position of "Date:" in the text
                        $datePosition = strpos($dateText, 'Date:');

                        // Extract and print the content after "Date:"
                        if ($datePosition !== false) {
                            $dataAfterDate = trim(substr($dateText, $datePosition + strlen('Date:')));
                        }
                    }
                }
                // Remove "TBD" from the string
                $dateString = str_replace('TDB', '', $dataAfterDate);
                $dateString = str_replace('TBD', '', $dateString);

                if ($dateString) {
                    // Split the string into start and end date parts
                    $dateParts = explode('-', $dateString);

                    // Trim any leading or trailing whitespaces
                    $startDate = trim($dateParts[0]);
                    $endDate = isset($dateParts[1]) ? trim($dateParts[1]) : null;

                    $startDate = explode(' ', $startDate);
                    // Parse the start date using Carbon

                    $year = 2024;
                    $month = $startDate[0];
                    $day = 1;
                    if ($startDate[1] == 2024) {
                        $year = 2024;
                    } else {
                        $day = $startDate[1];
                    }
                    $carbonStartDate = Carbon::createFromFormat("F j Y", $month . " " . $day . " " . $year);

                    // Parse the end date if available
                    $carbonEndDate = Carbon::createFromFormat("F j Y", $month . " " . $day . " " . $year);


                    // Output the results
                    $startDate  = $carbonStartDate->toDateString();
                    $endDate  = $carbonEndDate->toDateString();
                    // echo "End Date: " . ($carbonEndDate ? $carbonEndDate->toDateString() : 'N/A') . "\n\n";
                }







                $title = [];

                $h2Element = $item->filter('h2.elementor-heading-title');

                if($h2Element->filter('a')) {
                    var_dump($h2Element->filter('a')->innerText());

                }
                // // Extract href and title
                // if ($h2Element->count() > 0) {
                //     // Extract href attribute
                //     $href = $h2Element->filter('a')->attr('href');

                //     // Extract title text
                //     $title = $h2Element->filter('a')->text();

                //     // Output the results
                //     echo "Title: $title\n";
                //     echo "Href: $href\n";
                // }



                // $hoiNghi = [
                //     'ten_hoi_nghi' => $title['name'],
                //     'thoi_gian_bat_dau' => isset($startDate) ? $startDate : null,
                //     'thoi_gian_ket_thuc' => isset($endDate) ? $endDate : null,
                //     'dia_diem' =>  '',
                //     'lien_ket' =>$title['link'],
                //     'nguon_id' => 3,
                // ];

                // return $hoiNghi;
                // $this->storeOrUpdate($hoiNghi);
            }
        });

        return response($data);
    }

    function getAll(Request $request)
    {
        $data = DB::table('hoi_nghi as H')
            ->leftJoin('nguon_thong_tin as N', 'N.nguon_id', '=', 'H.nguon_id')
            ->leftJoin('chu_de as C', 'C.chu_de_id', '=', 'H.chu_de_id');

        if ($request->filled('search')) {
            $data->where('H.ten_hoi_nghi', 'LIKE', "%{$request->input('search')}%");
        }

        if ($request->filled('chu_de_id')) {
            $data->where('H.chu_de_id', $request->input('chu_de_id'));
        }
        if ($request->filled('dia_diem_id')) {
            $data->whereRaw("H.dia_diem LIKE '%{$request->input('dia_diem_id')}%'");
        }

        // if($request->has('dien_gia_id')) {
        //     $data->where('H.dien_gia_id', $request->input('dien_gia_id'));
        // }

        if ($request->filled('chu_de_id')) {
            $data->where('H.chu_de_id', $request->input('chu_de_id'));
        }

        if ($request->filled('nguon_id')) {
            $data->where('H.nguon_id', $request->input('nguon_id'));
        }

        if ($request->filled('length')) {
            $data->limit($request->input('length'));
        }
        if ($request->has('start')) {
            $data->offset($request->input('start'));
        }
        return response([
            'msg' => 'Return hoi nghi',
            'data' => $data->get()
        ]);
    }
}
