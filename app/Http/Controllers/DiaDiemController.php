<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaDiemController extends Controller
{
    function index() {
        return response(DB::table('dia_diem')->get());
    }
}
