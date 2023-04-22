<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Contact;

class BarbekoeController extends Controller
{
    public function index()
    {
        return view('sublanding.barbekoe.welcome', [
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
