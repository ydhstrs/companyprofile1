<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Contact;


class IndopropertiController extends Controller
{
    public function index()
    {
        return view('sublanding.indoproperti.welcome', [

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
            "contact" => Contact::where("typelanding", "indoproperti")->first(),

        ]);
    }
}
