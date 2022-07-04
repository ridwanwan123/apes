<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $News = News::all();

        return view('admin.news', ['News' => $News]);
    }

    public function tambah()
    {
        return view('admin.news-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png', 
            'judul' => 'required|string',
            'slug' => 'required|string',
            'body' => 'required|string',
            'sumber' => 'required|string',
            'publish' => 'required|string'
        ]);

        $image = $request->image;
        $originalImageName = Str::random(10).$image->getClientOriginalName();
        $image->storeAs('public/image-news', $originalImageName);
        $data['image'] = $originalImageName;
        $data['kategori'] = 'Pelecehan Seksual';

        News::create($data);

        return redirect()->route('admin.berita-pelecehan');
    }

    public function edit($id)
    {
        $News = News::find($id);
        
        return view('admin.news-edit', ['News' => $News]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png', 
            'judul' => 'string',
            'slug' => 'string',
            'body' => 'string',
            'sumber' => 'string',
            'publish' => 'string'
        ]);

        $News = News::find($id);

        if ($request->image){
            //save image baru
            $image = $request->image;
            $originalImageName = Str::random(10).$image->getClientOriginalName();
            $image->storeAs('public/image-news', $originalImageName);
            $data['image'] = $originalImageName;
            $data['kategori'] = 'Pelecehan Seksual';

            //delete image lama
            Storage::delete('public/image-news/'.$News->image);
        }

        $News->update($data);

        return redirect()->route('admin.berita-pelecehan');
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->route('admin.berita-pelecehan');
    }
}
