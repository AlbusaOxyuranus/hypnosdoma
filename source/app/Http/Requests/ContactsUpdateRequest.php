<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:190',
            'content' => 'required|max:500',
            'img' => 'required',
            'image_file' => 'image|max:1024',
        ];
    }
}
