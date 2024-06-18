<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\Setting;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $data = Setting::all();
        return view('front.index', compact('data'));
    }
}
