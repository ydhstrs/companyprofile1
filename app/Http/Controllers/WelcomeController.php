<?php

namespace App\Http\Controllers;


use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\ListSection;
use App\Models\Section;
use App\Models\Contact;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "sections1" => Section::where("typelanding", "main")->where("typesection", 1)->get(),
            "sections2" => Section::where("typelanding", "main")->where("typesection", 2)->get(),
            "listsections2" => ListSection::where("typelanding", "main")->where("id_section", 2)->get(),
            "sections3" => Section::where("typelanding", "main")->where("typesection", 3)->get(),
            "listsections3" => ListSection::where("typelanding", "main")->where("id_section", 3)->get(),
            "sections4" => Section::where("typelanding", "main")->where("typesection", 4)->get(),
            "listsections4" => ListSection::where("typelanding", "main")->where("id_section", 5)->get(),
            "sections5" => Section::where("typelanding", "main")->where("typesection", 5)->get(),
            "listsections5" => ListSection::where("typelanding", "main")->where("id_section", 6)->get(),
            "contact" => Contact::where("typelanding", "main")->first(),
            "bio" => Bio::first(),

        ]);
    }
}
