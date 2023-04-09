<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\Article;
use App\Models\Bio;
use App\Models\Materi;
use App\Models\Strength;
use App\Models\Contact;
use App\Models\ListSection;
use App\Models\Section;
use App\Models\Tool;
use App\Models\Testimonial;

class KepulController extends Controller
{
    public function index(){
        return view('sublanding.kepul.welcome', [
            "sections1" => Section::where("typelanding", "kepul")->where("typesection", 1)->get(),
            "sections2" => Section::where("typelanding", "kepul")->where("typesection", 2)->get(),
            "sections3" => Section::where("typelanding", "kepul")->where("typesection", 3)->get(),
            "sections4" => Section::where("typelanding", "kepul")->where("typesection", 4)->get(),
            "sections5" => Section::where("typelanding", "kepul")->where("typesection", 5)->get(),
            "contacts" => Contact::all(),
        ]);
    }
}
