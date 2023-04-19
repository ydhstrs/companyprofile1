<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Article;
use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Strength;
use App\Models\Contact;
use App\Models\Tool;
use App\Models\Testimonial;

class BarbekoeController extends Controller
{
    public function index()
    {
        return view('sublanding.barbekoe.welcome', [
            "banner" => Banner::all(),
            "articles" => Article::latest()->get(),
            "strengths" => Strength::all(),
            "contacts" => Contact::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),
            "sections1" => Section::where("typelanding", "barbekoe")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "barbekoe")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "barbekoe")->where("id_section", 34)->get(),
            "sections3" => Section::where("typelanding", "barbekoe")->where("typesection", 3)->first(),
            "listsections3" => ListSection::where("typelanding", "barbekoe")->where("id_section", 35)->get(),
            "sections4" => Section::where("typelanding", "barbekoe")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "barbekoe")->where("id_section", 36)->get(),
            "sections5" => Section::where("typelanding", "barbekoe")->where("typesection", 5)->first(),
            "listsections5" => ListSection::where("typelanding", "barbekoe")->where("id_section", 37)->get(),
            "sections6" => Section::where("typelanding", "barbekoe")->where("typesection", 6)->first(),
            "sections7" => Section::where("typelanding", "barbekoe")->where("typesection", 7)->first(),
            "listsections7" => ListSection::where("typelanding", "barbekoe")->where("id_section", 39)->get(),

            "contacts" => Contact::all(),
        ]);
    }
}
