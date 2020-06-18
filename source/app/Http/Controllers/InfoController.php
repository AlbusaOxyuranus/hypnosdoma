<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function store()
    {
        Info::create();
        return back();
    }

    public function update(Request $request, Info $info)
    {
        $data = $request->all();
        $info->update($data);
        return back();
    }

    public function delete(Info $info)
    {
        $info->delete();
        return back();
    }
}
