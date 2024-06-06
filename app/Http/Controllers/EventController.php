<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event=new Event();
        $event->date_id=$request->date_id;
        $event->event=$request->event;
        $event->save();

        return redirect()->route('date.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect()->route('date.index');
    }
}
