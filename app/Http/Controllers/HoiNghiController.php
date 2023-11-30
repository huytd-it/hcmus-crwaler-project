<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class HoiNghiController extends Controller
{
    function index()  {
        $host = 'https://vinasa.org.vn/';
        $response = Http::withoutVerifying()->get('https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/');
        $crawler = new Crawler($response);
        foreach($crawler->filter('.ListItem > .Item') as $value){
            echo($value);
        }

    }
}
