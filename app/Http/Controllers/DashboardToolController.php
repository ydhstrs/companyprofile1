<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tool.index', [
            'tools' => Tool::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tool.create');
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
            $validatedData['image'] = $request->file('image')->store('tool-images');
        }

        Tool::create($validatedData);

        return redirect('/dashboard/tool')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Tool $tool)
    {
        return view('admin.tool.show', [
            'tool' => $tool,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        return view('admin.tool.edit', [
            'tool' => $tool,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeRequest  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('tool-images');
        }

        Tool::where('id', $tool->id)->update($validatedData);

        return redirect('/dashboard/tool')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        if ($tool->image) {
            Storage::delete($tool->image);
        }
        Tool::destroy($tool->id);

        return redirect('/dashboard/tool')->with('delete', 'Gambar Telah Dihapus');
    }
}
