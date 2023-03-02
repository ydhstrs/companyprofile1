<?php

namespace App\Http\Controllers;

use App\Models\Strength;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardStrengthController extends Controller
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
        return view('admin.strength.index', [
            'strengths' => Strength::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.strength.create');
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
            'image' => 'image|file|max:1024',
            'isi' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('strength-images');
        }

        Strength::create($validatedData);

        return redirect('/dashboard/strength')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Strength $strength)
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
    public function edit(Strength $strength)
    {
        return view('admin.strength.edit', [
            'strength' => $strength,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Strength $strength)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'isi' => 'required',
        ]);

        if ($request->file('image')) {
            if ($strength->oldImage) {
                Storage::delete($strength->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('strength-images');
        }


        Strength::where('id', $strength->id)->update($validatedData);

        return redirect('/dashboard/strength')->with('success', 'Isi Materi Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Strength $strength)
    {
        if ($strength->image) {
            Storage::delete($strength->image);
        }
        Strength::destroy($strength->id);

        return redirect('/dashboard/strength')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }
}
