<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(project::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
    public function index()
    {
        return view('admin.project.index', [
            'projects' => Project::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:projects',
            'image' => 'image|file|max:1024',
            'isi' => 'required',
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('project-images');
        }

        Project::create($validatedData);

        return redirect('/dashboard/project')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.project.show', [
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', [
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        if ($request->slug != $project->slug) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|unique:projects',
                'image' => 'image|file|max:1024',
                'isi' => 'required',
            ]);
        } else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'image' => 'image|file|max:1024',
                'isi' => 'required',
            ]);
        }
        if ($request->file('image')) {
            if ($project->oldImage) {
                Storage::delete($project->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('project-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        Project::where('slug', $project->slug)->update($validatedData);

        return redirect('/dashboard/project')->with('success', 'Isi Materi Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }
        Project::destroy($project->id);

        return redirect('/dashboard/project')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }


    public function addToMain(Request $request)
    {
        Project::where('slug', $request->slug)->update([
            'status' => 1,
        ]);
        return redirect('/dashboard/project')->with('status', "Berhasil");
    }

    public function delToMain(Request $request)
    {
        Project::where('slug', $request->slug)->update([
            'status' => 0,
        ]);

        return redirect('/dashboard/project')->with('status', "Berhasil");
    }
}
