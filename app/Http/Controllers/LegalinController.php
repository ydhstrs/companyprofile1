<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ListSection;
use App\Models\Section;
use App\Models\Contact;


class LegalinController extends Controller
{
    public function index()
    {
        return view('sublanding.legalin.welcome', [
            "sections1" => Section::where("typelanding", "legalin")->where("typesection", 1)->get(),
            "sections2" => Section::where("typelanding", "legalin")->where("typesection", 2)->get(),
            "sections3" => Section::where("typelanding", "legalin")->where("typesection", 3)->get(),
            "listsections3" => ListSection::where("typelanding", "legalin")->where("id_section", 13)->get(),
            "sections4" => Section::where("typelanding", "legalin")->where("typesection", 4)->get(),
            "sections5" => Section::where("typelanding", "legalin")->where("typesection", 5)->get(),
            "listsections5" => ListSection::where("typelanding", "legalin")->where("id_section", 15)->get(),
            "contacts" => Contact::all(),

        ]);
    }
}
