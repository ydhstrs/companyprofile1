<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardArticleController extends Controller
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
        return view('admin.article.index', [
            'articles' => Article::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            'slug' => 'required|unique:articles',
            'image' => 'image|file|max:1024',
            'isi' => 'required',
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('article-images');
        }

        Article::create($validatedData);

        return redirect('/dashboard/article')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.article.show', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        if ($request->slug != $article->slug) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|unique:articles',
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
            if ($article->oldImage) {
                Storage::delete($article->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('article-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        Article::where('slug', $article->slug)->update($validatedData);

        return redirect('/dashboard/article')->with('success', 'Isi Materi Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::delete($article->image);
        }
        Article::destroy($article->id);

        return redirect('/dashboard/article')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }


    public function addToMain(Request $request)
    {
        Article::where('slug', $request->slug)->update([
            'status' => 1,
        ]);
        return redirect('/dashboard/article')->with('status', "Berhasil");
    }

    public function delToMain(Request $request)
    {
        Article::where('slug', $request->slug)->update([
            'status' => 0,
        ]);

        return redirect('/dashboard/article')->with('status', "Berhasil");
    }
}
