<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create()
    {
        return view('admin_panel.events.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:events|max:150',
            'description' => 'required',
            'show' => 'boolean',
            'date' => 'required|date',
            'link' => 'nullable',
        ]);

        if(empty($data['show'])) $data['show'] = false;

//        dd($data);

        Event::create($data);
        return redirect('admin/events')->with('flash_message', 'Событие добавлено!');
    }

    public function edit(Event $event)
    {
        return view('admin_panel.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'show' => 'boolean',
            'date' => 'required|date',
            'link' => 'nullable',
        ]);

        if(empty($data['show'])) $data['show'] = false;

        $old_name = $event->title;
        $event->update($data);
        return redirect('/admin/events')->with('flash_message', 'Событие - "' . $old_name . '" изменено!');
    }

    public function delete(Event $event)
    {
        $event->delete();
        return redirect('/admin/events')->with('flash_message', 'Событие - "' . $event->title . '" удалено!');
    }

    public function delete_all()
    {
        foreach (Event::all() as $event)
        {
            $event->delete();
        }

        return back()->with('flash_message', 'Все события удалены!!!!');
    }

    public function show_dont_show($show)
    {
        if ($show == 0)
        {
            foreach ($events = Event::all() as $event)
            {
                $event->update(['show'=>0]);
            }
        }

        else
        {
            foreach ($articles = Event::all() as $event)
            {
                $event->update(['show'=>1]);
            }
        }

        return back();
    }
}
