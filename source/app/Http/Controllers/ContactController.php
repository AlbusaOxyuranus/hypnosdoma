<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactsCreateRequest;
use App\Http\Requests\ContactsUpdateRequest;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function create()
    {
        return view('admin_panel.contacts.create');
    }

    public function store(ContactsCreateRequest $request, ImageService $imageService)
    {
        $data = $request->all();

        if (!empty($request->file('image_file')))
            $data += ['image_for_footer' => $imageService->saveImage($request->file('image_file'), 'contacts', 50, 50)];

        Contact::create($data);
        return redirect('/admin/contacts')->with('flash_message', 'Создан новый контакт! - ' . $request['title']);
    }

    public function edit(Contact $contact)
    {
        return view('admin_panel.contacts.edit', compact('contact'));
    }

    public function update(Contact $contact, ContactsUpdateRequest $request, ImageService $imageService)
    {
        $data = $request->all();

        if (!empty($request->file('image_file'))) {
            if (!empty($contact->image_for_footer)) Storage::delete('/public/uploaded_images/contacts/' . $contact->image_for_footer);
            $data += ['image_for_footer' => $imageService->saveImage($request->file('image_file'), 'contacts', 50, 50)];
        }

        $contact_name = $contact->title;
        $contact->update($data);

        return redirect('/admin/contacts')->with('flash_message', 'Контакт - ' . $contact_name . ' изменён!');
    }

    public function delete(Contact $contact)
    {
        $contact_name = $contact->title;
        $contact->delete();

        return redirect('/admin/contacts')->with('flash_message', 'Контакт - ' . $contact_name . ' удалён!');
    }
}
