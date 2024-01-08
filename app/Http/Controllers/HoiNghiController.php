<?php

namespace App\Http\Controllers;

use App\Models\HoiNghi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

// Ví dụ: Một controller quản lý xử lý dữ liệu Hội nghị
class HoiNghiController extends Controller
{

    function index()
    {

        $response = Http::withoutVerifying()
        ->get('https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/');
        $crawler = new Crawler($response);

        $nodeValues = $crawler->filter('.ListItem > .Item')
        ->each(function (Crawler $card, $i) {
            $dateTime = explode(" | ", $card->filter('.DateEvent')->innerText());
            $date = explode(" - ", $dateTime[0]);


            $hoiNghi =  [
                'ten_hoi_nghi' => $card->filter('.TitleEvent')->text(),
                'thoi_gian_bat_dau' => isset($date[0]) ? $date[0] : null,
                'thoi_gian_ket_thuc' => isset($date[1]) ? $date[1] : null,
                'dia_diem' => $card->filter('.AddressEvent')->innerText(),
                'lien_ket' => $card->filter('a')->attr('href')
            ];

            //Xử dụng Model HoiNghi để lưu dữ liệu vào Database
            HoiNghi::create($hoiNghi);

            return $hoiNghi;
        });



        return response(['msg' => 'Xử lý dữ liệu thành công']);
    }

    public function crawler2()
    {
        $host = 'https://digiday.com';
        $response = Http::withoutVerifying()->get('https://digiday.com/events/');
        $crawler = new Crawler($response);

        $nodeValues = $crawler->filter('#list ul li')->each(function (Crawler $item, $i) {


            $dateTime = explode(" ", $item->filter('.date')->innerText());
            $date = explode("-", trim($dateTime[1],","));

            $month = $dateTime[0];
            $year = $dateTime[2];
            $startDate  = (Carbon::createFromFormat('F j, Y', $month." ". $date[0].", ".$year))->toDateString();
            // $endDate = $date[1];

            // var_dump($date);
            // $time = explode(" đến ", $dateTime[1]);


            return [
                'ten_hoi_nghi' => $item->filter('.description  a')->text(),
                'thoi_gian_bat_dau' => isset($startDate) ? $startDate : null,
                // 'thoi_gian_ket_thuc' => isset($date[1]) ? $date[1] : null,
                'dia_diem' => $item->filter('.location > div')->innerText(),
                'lien_ket' => $item->filter('.description  a')->attr('href')
            ];
        });

        // var_dump($nodeValues);
        return response($nodeValues);
    }
}
