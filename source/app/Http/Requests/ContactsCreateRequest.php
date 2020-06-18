<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:contacts|string|max:190',
            'content' => 'required|max:500',
            'img' => 'required',
            'image_file' => 'required|image|max:1024',
        ];
    }
}
