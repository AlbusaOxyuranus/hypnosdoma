<?php

namespace App\Http\Controllers;

use App\SEOPage;
use Illuminate\Http\Request;

class SEOPageController extends Controller
{
    public function store(Request $request)
    {
        SEOPage::create($request->all());

        return back();
    }

    public function update(Request $request, SEOPage $page)
    {
        $data = $request->all();

        $data += ['page_title_length' => strlen($data['page_title'])];
        $data += ['page_description_length' => strlen($data['page_description'])];
        $data += ['page_h1_length' => strlen($data['page_h1'])];

//        dd($data);

        $page->update($data);
        return back();
    }

    public function delete(SEOPage $page)
    {
        $page->delete();
        return back();
    }
}
