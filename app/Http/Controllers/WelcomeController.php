<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use App\Models\Project;
use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Strength;
use App\Models\Tool;
use App\Models\Testimonial;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "banner" => Banner::all(),
            "projects" => Project::where('status', 1)->get(),
            "strengths" => Strength::all(),
            "testimonials" => Testimonial::all(),
            "bio" => Bio::all(),
            "tools" => Tool::all(),
            "about" => About::all(),

        ]);
    }
}
