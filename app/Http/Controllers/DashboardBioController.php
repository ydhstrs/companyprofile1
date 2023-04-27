<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardBioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bio.index', [
            'bios' => Bio::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => '',
        ]);



        Bio::create($validatedData);

        return redirect('/dashboard/bio')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Bio $bio)
    {
        return view('admin.bio.show', [
            'bio' => $bio,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        return view('admin.bio.edit', [
            'bio' => $bio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeRequest  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bio $bio)
    {
        $validatedData = $request->validate([
            'saramoda' => '',
            'kepul' => '',
            'indomarket' => '',
            'legalin' => '',
            'foundation' => '',
            'barbekoe' => '',
            'indoproperti' => '',
            'indofarm' => '',
        ]);



        Bio::where('id', $bio->id)->update($validatedData);

        return redirect('/dashboard/bio')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bio $bio)
    {
        if ($bio->image) {
            Storage::delete($bio->image);
        }
        Bio::destroy($bio->id);

        return redirect('/dashboard/bio')->with('delete', 'Gambar Telah Dihapus');
    }
}
