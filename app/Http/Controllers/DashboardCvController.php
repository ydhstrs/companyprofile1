<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cv.index', [
            'cvs' => Cv::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cv.create');
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
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('cv-images');
        }

        Cv::create($validatedData);

        return redirect('/dashboard/cv')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        return view('admin.cv.show', [
            'cv' => $cv,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        return view('admin.cv.edit', [
            'cv' => $cv,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeRequest  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('cv-images');
        }

        Cv::where('id', $cv->id)->update($validatedData);

        return redirect('/dashboard/cv')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        if ($cv->image) {
            Storage::delete($cv->image);
        }
        Cv::destroy($cv->id);

        return redirect('/dashboard/cv')->with('delete', 'Gambar Telah Dihapus');
    }
}
