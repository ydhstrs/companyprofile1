<?php

namespace App\Http\Controllers;

use App\Models\ListSection;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardKepulListSectionController extends Controller
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
        return view('admin.kepul.listsection.index', [
            'listsections' => ListSection::where("typelanding", "kepul")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kepul.listsection.create', [
            'sections' => Section::where('withlist', 1)->where('typelanding','kepul')->get(),
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
            'slug' => 'unique:list_sections',
            'image' => 'image|file',
            'isi' => '',

        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('listsection-images');
        }


        ListSection::create($validatedData);

        return redirect('/dashboard/kepul/listsection')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(ListSection $listsection)
    {
        return view('admin.kepul.listsection.show', [
            'listsection' => $listsection,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(ListSection $listsection)
    {
        return view('admin.kepul.listsection.edit', [
            'listsection' => $listsection,
            'sections' => Section::where('withlist', 1)->get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListSection $listsection)
    {
        if ($request->slug != $listsection->slug) {
            $validatedData = $request->validate([
                'title' => 'max:255',
                'id_section' => 'max:11',
                'subtitle' => 'max:255',
                'slug' => 'unique:list_sections',
                'image' => 'image|file',
                'isi' => '',
            ]);
        } else {
            $validatedData = $request->validate([
                'title' => 'max:255',
                'id_section' => 'max:11',
                'subtitle' => 'max:255',
                'image' => 'image|file',
                'isi' => '',
            ]);
        }
        if ($request->file('image')) {
            if ($listsection->oldImage) {
                Storage::delete($listsection->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('listsection-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        ListSection::where('slug', $listsection->slug)->update($validatedData);



        return redirect('/dashboard/kepul/listsection')->with('success', 'Section Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListSection $listsection)
    {
        if ($listsection->image) {
            Storage::delete($listsection->image);
        }

        ListSection::destroy($listsection->id);

        return redirect('/dashboard/kepul/listsection')->with('success', 'Section Telah Dihapus');
    }
}
