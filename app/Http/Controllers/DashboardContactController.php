<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardContactController extends Controller
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
        return view('admin.contact.index', [
            'about' => Contact::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
            'address' => 'required|max:255',
            'twitter' => 'required|max:255',
            'youtube' => 'required|max:255',
        ]);


        Contact::create($validatedData);

        return redirect('/dashboard/contact')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:255',
            'tiktok' => 'required|max:255',
            'linkedin' => 'required|max:255',
            'instagram' => 'required|max:255',
            'address' => 'required|max:255',
            'twitter' => 'required|max:255',
            'youtube' => 'required|max:255',
        ]);




        Contact::where('id', $contact->id)->update($validatedData);

        return redirect('/dashboard/contact')->with('success', 'Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $about)
    {
        if ($about->image) {
            Storage::delete($about->image);
        }
        Contact::destroy($about->id);

        return redirect('/dashboard/contact')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }
}
