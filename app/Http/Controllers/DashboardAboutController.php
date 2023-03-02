<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(strength::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
    public function index()
    {
        return view('admin.about.index', [
            'about' => About::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'email' => 'required|max:255',
            'tiktok' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'instagram' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'cv' => 'file|max:1024',
            'isi' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('about-images');
        }
        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('about-images');
        }

        About::create($validatedData);

        return redirect('/dashboard/about')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(About $strength)
    {
        return view('admin.strength.show', [
            'strength' => $strength,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', [
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'tiktok' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'instagram' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'cv' => 'file|max:1024',
            'isi' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('about-images');
        }
        if ($request->file('cv')) {
            if ($request->oldCv) {
                Storage::delete($request->oldCv);
            }
            $validatedData['cv'] = $request->file('cv')->store('about-images');
        }


        About::where('id', $about->id)->update($validatedData);

        return redirect('/dashboard/about')->with('success', 'Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::delete($about->image);
        }
        About::destroy($about->id);

        return redirect('/dashboard/about')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }
}
