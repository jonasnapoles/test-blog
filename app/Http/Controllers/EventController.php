<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $events = Event::all();
        return view('welcome',['events' => $events]);
=======

        $events = Event::all();
        return view('welcome',['events'=> $events]);
>>>>>>> 69f4771 (feature(#02):Update-events-MVC-styles)
    }

    public function create()
    {
        return view('events.create');
    }

    public function store()
    {
        # code...
    }
}

