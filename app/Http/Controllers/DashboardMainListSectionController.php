<?php

namespace App\Http\Controllers;

use App\Models\ListSection;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardMainListSectionController extends Controller
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
        return view('admin.main.listsection.index', [
            'listsections' => ListSection::where("typelanding", "main")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main.listsection.create', [
            'sections' => Section::where('withlist', 1)->get(),

        ]);
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
            'title' => 'max:255',
            'id_section' => 'max:11',
            'typelanding' => 'max:255',
            'subtitle' => 'max:255',
            'slug' => 'unique:articles',
            'image' => 'image|file',
            'isi' => '',

        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('listsection-images');
        }


        ListSection::create($validatedData);

        return redirect('/dashboard/main/listsection')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        return view('admin.main.section.show', [
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
        return view('admin.main.section.edit', [
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
            'subtittle2' => 'max:255',
            'subtittle3' => 'max:255',
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

        return redirect('/dashboard/main/section')->with('success', 'Section Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        if ($section->image1) {
            Storage::delete($section->image1);
        }
        if ($section->image2) {
            Storage::delete($section->image2);
        }
        Section::destroy($section->id);

        return redirect('/dashboard/main/section')->with('success', 'Section Baru Telah Dihapus');
    }
}
