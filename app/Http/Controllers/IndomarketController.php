<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Contact;


class IndomarketController extends Controller
{
    public function index()
    {
        return view('sublanding.indomarket.welcome', [

            "sections1" => Section::where("typelanding", "indomarket")->where("typesection", 1)->first(),
            "listsections1" => ListSection::where("typelanding", "indomarket")->where("id_section", 21)->get(),
            "sections2" => Section::where("typelanding", "indomarket")->where("typesection", 2)->first(),
            "listsections2" => ListSection::where("typelanding", "indomarket")->where("id_section", 22)->get(),
            "sections3" => Section::where("typelanding", "indomarket")->where("typesection", 3)->first(),
            "listsections3" => ListSection::where("typelanding", "indomarket")->where("id_section", 23)->get(),
            "sections4" => Section::where("typelanding", "indomarket")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "indomarket")->where("id_section", 24)->get(),
            "sections5" => Section::where("typelanding", "indomarket")->where("typesection", 5)->first(),
            "contact" => Contact::where("typelanding", "indomarket")->first(),


        ]);
    }
}
