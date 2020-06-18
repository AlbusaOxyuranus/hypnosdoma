<?php

namespace App\Http\Controllers;

use App\Article;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin_panel.articles.create');
    }

    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'title' => 'required|unique:articles|max:150',
            'description' => 'required',
            'image' => 'required|image|max:10240',
            'show' => 'boolean',
            'date' => 'required|date',
            'link' => 'nullable',
        ]);

        if(empty($data['show'])) $data['show'] = false;

//        dd($data);

        if (!empty($request->file('image')))
            $data += ['image_name' => $imageService->saveImage($request->file('image'), 'articles', 112, 112)];

        Article::create($data);
        return redirect('admin/articles')->with('flash_message', 'Новость добавлена!');
    }

    public function edit(Article $article)
    {
        return view('admin_panel.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article, ImageService $mainService)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'image|max:10240',
            'show' => 'boolean',
            'date' => 'required|date',
            'link' => 'nullable',
        ]);

        if(empty($data['show'])) $data['show'] = false;

//        dd($data);

        if (!empty($request->file('image'))) {
            if (!empty($article->image_name)) Storage::delete('/public/uploaded_images/articles/' . $article->image_name);
            $data += ['image_name' => $mainService->saveImage($request->file('image'), 'articles', 112, 112)];
        }

        $old_name = $article->title;
        $article->update($data);
        return redirect('/admin/articles')->with('flash_message', 'Новость - "' . $old_name . '" изменена!');
    }

    public function delete(Article $article)
    {
        if (!empty($article->image_name)) Storage::delete('/public/uploaded_images/articles/' . $article->image_name);
        $article->delete();
        return redirect('/admin/articles')->with('flash_message', 'Новость - "' . $article->title . '" удалена!');
    }

    public function delete_all()
    {
        foreach (Article::all() as $article)
        {
            Storage::delete('/public/uploaded_images/articles/' . $article->image_name);
            $article->delete();
        }

        return back()->with('flash_message', 'Все новости удалены!!!!');
    }

    public function show_dont_show($show)
    {
        if ($show == 0)
        {
            foreach ($articles = Article::all() as $article)
            {
                $article->update(['show'=>0]);
            }
        }

        else
        {
            foreach ($articles = Article::all() as $article)
            {
                $article->update(['show'=>1]);
            }
        }

        return back();
    }
}
