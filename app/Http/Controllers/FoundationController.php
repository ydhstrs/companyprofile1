<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Contact;

class FoundationController extends Controller
{
    public function index()
    {
        return view('sublanding.foundation.welcome', [

            "sections1" => Section::where("typelanding", "foundation")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "foundation")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "foundation")->where("id_section", 27)->get(),
            "sections3" => Section::where("typelanding", "foundation")->where("typesection", 3)->first(),
            "sections4" => Section::where("typelanding", "foundation")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "foundation")->where("id_section", 29)->get(),
            "sections5" => Section::where("typelanding", "foundation")->where("typesection", 5)->first(),
            "sections6" => Section::where("typelanding", "foundation")->where("typesection", 6)->first(),
            "listsections6" => ListSection::where("typelanding", "foundation")->where("id_section", 31)->latest()->take(5)->get(),
            "contact" => Contact::where("typelanding", "foundation")->first(),

        ]);
    }
}
