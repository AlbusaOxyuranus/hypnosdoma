<?php

namespace App\Http\Controllers;

use App\Rewiew;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RewiewController extends Controller
{
    public function create()
    {
        return view('admin_panel.rewiews.create');
    }

    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'title' => 'required|unique:rewiews|max:150',
            'image' => 'required|image|max:10240',
        ]);

//        dd($data);

        if (!empty($request->file('image')))
            $data += ['img' => $imageService->saveImage($request->file('image'), 'rewiews', 600, 1070)];

        Rewiew::create($data);
        return redirect('/admin/rewiews')->with('flash_message', 'Создан новый отзыв!');
    }

    public function edit(Rewiew $rewiew)
    {
        return view('admin_panel.rewiews.edit', compact('rewiew'));
    }

    public function update(Request $request, ImageService $imageService, Rewiew $rewiew)
    {
        $data = $request->validate([
            'title' => 'max:150',
            'image' => 'image|max:10240',
        ]);

        if (!empty($request->file('image'))) {
            if (!empty($rewiew->img)) Storage::delete('/public/uploaded_images/rewiews/' . $rewiew->img);
            $data += ['img' => $imageService->saveImage($request->file('image'), 'rewiews', 600, 1070)];
        }

        $old_name = $rewiew->title;
        $rewiew->update($data);
        return redirect('/admin/rewiews')->with('flash_message', 'Отзыв - "' . $old_name . '" был изменён!');

    }

    public function delete(Rewiew $rewiew)
    {
        Storage::delete('/public/uploaded_images/rewiews/' . $rewiew->img);

        $rewiew_name = $rewiew->title;
        $rewiew->delete();

        return redirect('/admin/rewiews')->with('flash_message', 'Отзыв "' . $rewiew_name . '" удалён!');
    }
}
