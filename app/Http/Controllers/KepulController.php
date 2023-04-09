<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ListSection;
use App\Models\Section;

class KepulController extends Controller
{
    public function index(){
        return view('sublanding.kepul.welcome', [
            "sections1" => Section::where("typelanding", "kepul")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "kepul")->where("typesection", 2)->first(),
            "sections3" => Section::where("typelanding", "kepul")->where("typesection", 3)->first(),
            "sections4" => Section::where("typelanding", "kepul")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "kepul")->where("id_section", 10)->get(),
            "sections5" => Section::where("typelanding", "kepul")->where("typesection", 5)->first(),
            "contacts" => Contact::all(),
        ]);
    }
}
