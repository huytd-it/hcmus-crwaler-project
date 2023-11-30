<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;
class HoiNghiController extends Controller
{
    function index()  {
        $host = 'https://vinasa.org.vn/';
        $response = Http::withoutVerifying()->get('https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/');
        $crawler = new Crawler($response);

        $nodeValues = $crawler->filter('.ListItem > .Item')->each(function (Crawler $card, $i) {


            $dateTime = explode(" | ",$card->filter('.DateEvent')->innerText());


            $date = explode(" - ",$dateTime[0]);
            // $time = explode(" đến ", $dateTime[1]);


            return [
                'ten_hoi_nghi' => $card->filter('.TitleEvent')->text(),
                'thoi_gian_bat_dau' => isset($date[0]) ? $date[0] : NULL,
                'thoi_gian_ket_thuc' => isset($date[1]) ? $date[1] : NULL,
                'dia_diem' => $card->filter('.AddressEvent')->innerText(),
            ];
        });

       // var_dump($nodeValues);
        return response($nodeValues);

    }
}
