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

class IndomarketController extends Controller
{
    public function index()
    {
        return view('sublanding.indomarket.welcome', [
            "banner" => Banner::all(),
            "articles" => Article::latest()->get(),
            "strengths" => Strength::all(),
            "contacts" => Contact::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),
            "sections1" => Section::where("typelanding", "indomarket")->where("typesection", 1)->first(),
            "listsections1" => ListSection::where("typelanding", "indomarket")->where("id_section", 21)->get(),
            "sections2" => Section::where("typelanding", "indomarket")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "indomarket")->where("id_section", 22)->get(),
            "sections3" => Section::where("typelanding", "indomarket")->where("typesection", 3)->first(),
            "listsections3" => ListSection::where("typelanding", "indomarket")->where("id_section", 23)->get(),
            "sections4" => Section::where("typelanding", "indomarket")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "indomarket")->where("id_section", 24)->get(),
            "sections5" => Section::where("typelanding", "indomarket")->where("typesection", 5)->first(),
            "contacts" => Contact::all(),

        ]);
    }
}
