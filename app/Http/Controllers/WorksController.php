<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Bio;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Strength;
use App\Models\Testimonial;

class WorksController extends Controller
{
    public function index()
    {
        return view('works', [
            "projects" => Project::all(),
            "about" => About::all(),

        ]);
    }
    public function show(Project $project)
    {
        return view('work', [
            'project' => $project
        ]);
    }
}
