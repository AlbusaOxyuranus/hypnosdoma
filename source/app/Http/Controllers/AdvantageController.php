<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvantageController extends Controller
{
    public function create()
    {
        return view('admin_panel.advantages.create');
    }

    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'title' => 'required|unique:advantages|max:150',
            'description' => 'required',
            'image' => 'required|image|max:10240',
            'show' => 'boolean'
        ]);

//        if (empty($request->show)) $data += ['show' => 0];
        if(empty($data['show'])) $data['show'] = false;

//        dd($data);

        if (!empty($request->file('image')))
            $data += ['image_name' => $imageService->saveImage($request->file('image'), 'advantages', 121, 134)];

        Advantage::create($data);
        return redirect('/admin/advantages')->with('flash_message', 'Создано новое преимущество!');
    }

    public function edit(Advantage $advantage)
    {
        return view('admin_panel.advantages.edit', compact('advantage'));
    }

    public function update(Request $request, ImageService $imageService, Advantage $advantage)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'image|max:10240',
            'show' => 'boolean',
        ]);

        if(empty($data['show'])) $data['show'] = false;

        if (!empty($request->file('image'))) {
            if (!empty($advantage->image_name)) Storage::delete('/public/uploaded_images/advantages/' . $advantage->image_name);
            $data += ['image_name' => $imageService->saveImage($request->file('image'), 'advantages', 121, 134)];
        }

        $old_name = $advantage->title;
        $advantage->update($data);
        return redirect('/admin/advantages')->with('flash_message', 'Преимущество - "' . $old_name . '" изменено!');
    }

    public function delete(Advantage $advantage)
    {
        if (!empty($advantage->image_name)) Storage::delete('/public/uploaded_images/advantages/' . $advantage->image_name);
        $advantage->delete();
        return redirect('/admin/advantages')->with('flash_message', 'Преимущество - "' . $advantage->title . '" удалено!');
    }

    public function delete_all()
    {
        foreach (Advantage::all() as $advantage)
        {
            Storage::delete('/public/uploaded_images/advantages/' . $advantage->image_name);
            $advantage->delete();
        }

        return back()->with('flash_message', 'Все новости удалены!!!!');
    }

    public function show_dont_show($show)
    {
        if ($show == 0)
        {
            foreach ($advantages = Advantage::all() as $advantage)
            {
                $advantage->update(['show'=>0]);
            }
        }

        else
        {
            foreach ($advantages = Advantage::all() as $advantage)
            {
                $advantage->update(['show'=>1]);
            }
        }

        return back();
    }
}
