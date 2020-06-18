<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use App\Specialist;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialistController extends Controller
{
    public function create()
    {
        return view('admin_panel.specialist.create');
    }

    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'surname' => 'required|unique:specialists|max:150',
            'name' => 'required',
            'patronymic' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:10240'
        ]);

        if (!empty($request->file('image')))
            $data += ['img' => $imageService->saveImage($request->file('image'), 'specialist', 160, 300)];

        $data += ['slug' => Str::slug($data['surname'] . ' ' . $data['name'] . ' ' . $data['patronymic'] . '-' . Str::random(10), '-')];

        Specialist::create($data);
        return redirect('/admin/specialists')->with('flash_message', 'Создан новый специалист!');

    }

    public function edit(Specialist $specialist)
    {
        return view('admin_panel.specialist.edit', compact('specialist'));
    }

    public function update(Request $request, ImageService $imageService, Specialist $specialist)
    {
        $data = $request->validate([
            'surname' => 'required|max:150',
            'name' => 'required',
            'patronymic' => 'required',
            'description' => 'required',
            'image' => 'image|max:10240'
        ]);

        if (!empty($request->file('image'))) {
            if (!empty($specialist->img)) Storage::delete('/public/uploaded_images/specialist/' . $specialist->img);
            $data += ['img' => $imageService->saveImage($request->file('image'), 'specialist', 160, 300)];
        }

        $data += ['slug' => Str::slug($data['surname'] . ' ' . $data['name'] . ' ' . $data['patronymic'] . '-' . Str::random(10), '-')];
        $specialist_name = $specialist->slug;
        $specialist->update($data);

        return redirect('admin/specialists')->with('flash_message', 'Специалист "' . $specialist_name . '" изменён!');
    }

    public function delete(Specialist $specialist)
    {
        Storage::delete('/public/uploaded_images/specialist/' . $specialist->img);

        $specialist_name = $specialist->slug;
        $specialist->delete();

        return redirect('/admin/specialists')->with('flash_message', 'Специалист "' . $specialist_name . '" удалён!');
    }
}
