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

class IndopropertiController extends Controller
{
    public function index()
    {
        return view('sublanding.indoproperti.welcome', [
            "banner" => Banner::all(),
            "articles" => Article::latest()->get(),
            "strengths" => Strength::all(),
            "contacts" => Contact::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),
            "sections1" => Section::where("typelanding", "indoproperti")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "indoproperti")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "indoproperti")->where("id_section", 43)->get(),
            "sections3" => Section::where("typelanding", "indoproperti")->where("typesection", 3)->first(),
            "listsections3" => ListSection::where("typelanding", "indoproperti")->where("id_section", 44)->get(),
            "sections4" => Section::where("typelanding", "indoproperti")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "indoproperti")->where("id_section", 45)->get(),
            "sections5" => Section::where("typelanding", "indoproperti")->where("typesection", 5)->first(),
            "sections6" => Section::where("typelanding", "indoproperti")->where("typesection", 6)->first(),
            "sections7" => Section::where("typelanding", "indoproperti")->where("typesection", 7)->first(),
            "listsections7" => ListSection::where("typelanding", "indoproperti")->where("id_section", 48)->get(),

            "contacts" => Contact::all(),
        ]);
    }
}
