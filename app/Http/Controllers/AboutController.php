<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Tool;
use App\Models\Cv;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "about" => About::all(),
            "cv" => Cv::all(),
            "tools" => Tool::all(),

        ]);
    }
}
