<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\ListSection;
use App\Models\Strength;
use App\Models\Contact;


class SaramodaController extends Controller
{
    public function index()
    {
        return view('sublanding.saramoda.welcome', [
            "sections1" => Section::where("typelanding", "saramoda")->where("typesection", 1)->first(),
            "sections2" => Section::where("typelanding", "saramoda")->where("typesection", 2)->first(),
            "sections3" => Section::where("typelanding", "saramoda")->where("typesection", 3)->first(),
            "sections4" => Section::where("typelanding", "saramoda")->where("typesection", 4)->first(),
            "listsections4" => ListSection::where("typelanding", "saramoda")->where("id_section", 19)->latest()->get(),
            "sections5" => Section::where("typelanding", "saramoda")->where("typesection", 5)->first(),
            "listsections5" => ListSection::where("typelanding", "saramoda")->where("id_section", 20)->latest()->get(),
            "sections6" => Section::where("typelanding", "saramoda")->where("typesection", 6)->first(),
            "listsections6" => ListSection::where("typelanding", "saramoda")->where("id_section", 201)->get(),


            "contact" => Contact::where("typelanding", "saramoda")->first(),

        ]);
    }
}
