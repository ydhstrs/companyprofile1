<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Article;
use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\ListSection;
use App\Models\Section;
use App\Models\Strength;
use App\Models\Contact;
use App\Models\Tool;
use App\Models\Testimonial;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "sections1" => Section::where("typelanding", "main")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "main")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "main")->where("id_section", 2)->first(),
            "sections3" => Section::where("typelanding", "main")->where("typesection", 3)->first(),
            "listsections3" => ListSection::where("typelanding", "main")->where("id_section", 3)->first(),
            "sections4" => Section::where("typelanding", "main")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "main")->where("id_section", 5)->first(),
            "sections5" => Section::where("typelanding", "main")->where("typesection", 5)->first(),
            "listsections5" => ListSection::where("typelanding", "main")->where("id_section", 6)->first(),
            "contacts" => Contact::all(),

        ]);
    }
}
