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

class SaramodaController extends Controller
{
    public function index()
    {
        return view('sublanding.saramoda.welcome', [
            "banner" => Banner::all(),
            "articles" => Article::latest()->get(),
            "strengths" => Strength::all(),
            "contacts" => Contact::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),
            "sections1" => Section::where("typelanding", "saramoda")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "saramoda")->where("typesection", 2)->first(),
            "sections3" => Section::where("typelanding", "saramoda")->where("typesection", 3)->first(),
            "sections4" => Section::where("typelanding", "saramoda")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "saramoda")->where("id_section", 19)->latest()->get(),
            "sections5" => Section::where("typelanding", "saramoda")->where("typesection", 5)->first(),
            "listsections5" => ListSection::where("typelanding", "saramoda")->where("id_section", 20)->latest()->get(),
            "sections6" => Section::where("typelanding", "saramoda")->where("typesection", 6)->first(),
            "listsections6" => ListSection::where("typelanding", "saramoda")->where("id_section", 201)->get(),


            "contacts" => Contact::all(),
        ]);
    }
}
