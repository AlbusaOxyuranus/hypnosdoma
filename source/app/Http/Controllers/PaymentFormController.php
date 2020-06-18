<?php

namespace App\Http\Controllers;

use App\Payment_form;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Storage;

class PaymentFormController extends Controller
{
    public function create()
    {
        return view('admin_panel.payment_forms.create');
    }

    public function store(Request $request, ImageService $imageService)
    {
        $data = $request->validate([
            'title' => 'required|unique:payment_forms|max:150',
            'description' => 'required',
            'image' => 'required|image|max:10240',
            'show' => 'boolean'
        ]);

        if(empty($data['show'])) $data['show'] = false;

//        dd($data);
        if (!empty($request->file('image')))
            $data += ['image_name' => $imageService->saveImage($request->file('image'), 'payment_forms', 512)];

        Payment_form::create($data);
        return redirect('/admin/payment_forms')->with('flash_message', 'Создана новая форма оплаты!');
    }

    public function edit(Payment_form $payment_form)
    {
        return view('admin_panel.payment_forms.edit', compact('payment_form'));
    }

    public function update(Request $request, ImageService $imageService, Payment_form $payment_form)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'image' => 'image|max:10240',
            'show' => 'boolean',
        ]);

        if(empty($data['show'])) $data['show'] = false;

        if (!empty($request->file('image'))) {
            if (!empty($payment_form->image_name)) Storage::delete('/public/uploaded_images/payment_forms/' . $payment_form->image_name);
            $data += ['image_name' => $imageService->saveImage($request->file('image'), 'payment_forms', 512)];
        }

        $old_name = $payment_form->title;
        $payment_form->update($data);
        return redirect('/admin/payment_forms')->with('flash_message', 'Форма оплаты - "' . $old_name . '" измененa!');
    }

    public function delete(Payment_form $payment_form)
    {
        if (!empty($payment_form->image_name)) Storage::delete('/public/uploaded_images/payment_forms/' . $payment_form->image_name);
        $payment_form->delete();
        return redirect('/admin/payment_forms')->with('flash_message', 'Форма оплаты - "' . $payment_form->title . '" удалена!');
    }

    public function delete_all()
    {
        foreach (Payment_form::all() as $payment_form)
        {
            Storage::delete('/public/uploaded_images/payment_forms/' . $payment_form->image_name);
            $payment_form->delete();
        }

        return back()->with('flash_message', 'Все формы оплаты удалены!!!!');
    }

    public function show_dont_show($show)
    {
        if ($show == 0)
        {
            foreach ($payment_forms = Payment_form::all() as $payment_form)
            {
                $payment_form->update(['show'=>0]);
            }
        }

        else
        {
            foreach ($payment_forms = Payment_form::all() as $payment_form)
            {
                $payment_form->update(['show'=>1]);
            }
        }

        return back();
    }
}
