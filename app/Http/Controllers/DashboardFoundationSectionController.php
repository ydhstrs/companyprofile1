<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardFoundationSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(article::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
    public function index()
    {
        return view('admin.foundation.section.index', [
            'sections' => Section::where("typelanding", "foundation")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foundation.section.create');
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
            'typelanding' => 'max:255',
            'typesection' => '',
            'title1' => 'max:255',
            'title2' => 'max:255',
            'title3' => 'max:255',
            'desc1' => '',
            'desc2' => '',
            'desc3' => '',
            'subtitle1' => 'max:255',
            'subtitle2' => 'max:255',
            'subtitle3' => 'max:255',
            'subdesc1' => '',
            'subdesc2' => '',
            'subdesc3' => '',

        ]);
        if ($request->file('image1')) {
            $validatedData['image1'] = $request->file('image1')->store('section-images');
        }
        if ($request->file('image2')) {
            $validatedData['image2'] = $request->file('image2')->store('section-images');
        }

        Section::create($validatedData);

        return redirect('/dashboard/foundation/section')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        return view('admin.foundation.section.show', [
            'section' => $section,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        return view('admin.foundation.section.edit', [
            'section' => $section,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {

        $validatedData = $request->validate([

            'title1' => 'max:255',
            'title2' => 'max:255',
            'title3' => 'max:255',
            'desc1' => '',
            'desc2' => '',
            'desc3' => '',
            'subtitle1' => 'max:255',
            'subtitle2' => 'max:255',
            'subtitle3' => 'max:255',
            'subdesc1' => '',
            'subdesc2' => '',
            'subdesc3' => '',
        ]);

        if ($request->file('image1')) {
            if ($section->oldImage1) {
                Storage::delete($section->oldImage1);
            }

            $validatedData['image1'] = $request->file('image1')->store('section-images');
        }
        if ($request->file('image2')) {
            if ($section->oldImage2) {
                Storage::delete($section->oldImage2);
            }

            $validatedData['image2'] = $request->file('image2')->store('section-images');
        }


        Section::where('id', $section->id)->update($validatedData);

        return redirect('/dashboard/foundation/section')->with('success', 'Section Baru Telah Diubah');
    }

    public function destroy(Section $section)
    {
        if ($section->image1) {
            Storage::delete($section->image1);
        }
        if ($section->image2) {
            Storage::delete($section->image2);
        }
        Section::destroy($section->id);

        return redirect('/dashboard/foundation/section')->with('success', 'Section Baru Telah Dihapus');
    }
}
