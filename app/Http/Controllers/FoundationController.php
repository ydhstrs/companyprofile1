<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Article;
use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Strength;
use App\Models\Contact;
use App\Models\Tool;
use App\Models\Testimonial;

class FoundationController extends Controller
{
    public function index()
    {
        return view('sublanding.foundation.welcome', [
            "banner" => Banner::all(),
            "articles" => Article::latest()->get(),
            "strengths" => Strength::all(),
            "contacts" => Contact::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),

        ]);
    }
}
