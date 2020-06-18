<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create()
    {
        return view('admin_panel.packege.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:packages|max:150',
            'price' => 'required|integer',
            'currency' => 'required',
            'description' => 'required',
            'content' => 'required',

            'popular' => 'boolean',
            'show' => 'boolean',
        ]);

        if(empty($data['popular'])) $data['popular'] = false;
        if(empty($data['show'])) $data['show'] = false;

        Package::create($data);
        return redirect('/admin/packages')->with('flash_message', 'Создан новый ценовой пакет! - ' . $request['name']);
    }
    public function edit(Package $package)
    {
        return view('admin_panel.packege.edit', compact('package'));
    }

    public function update(Package $package, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:150',
            'price' => 'required|integer',
            'currency' => 'required',
            'description' => 'required',
            'content' => 'required',

            'popular' => 'boolean',
            'show' => 'boolean',
        ]);

        if(empty($data['popular'])) $data['popular'] = false;
        if(empty($data['show'])) $data['show'] = false;

//        dd($data);

        $package_name = $package->name;
        $package->update($data);

        return redirect('/admin/packages')->with('flash_message', 'Ценовой пакет - ' . $package_name . ' изменён!');
    }

    public function delete(Package $package)
    {
        $package_name = $package->name;
        $package->delete();

        return redirect('/admin/packages')->with('flash_message', 'Ценовой пакет - ' . $package_name . ' удалён!');
    }
}
