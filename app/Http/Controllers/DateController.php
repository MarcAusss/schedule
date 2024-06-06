<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Event;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date=Date::all();
        $event=Event::all();
        return view('home', compact('date','event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Date.add_date');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date=new Date();
        $date->date=$request->date;
        $date->save();

        // return view('admin.add_album');
        return redirect()->route('date.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $date = Date::find($id);
    $event = Event::find($id);
    return view('showDate', compact('event'))->with('date', $date);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $date = Date::find($id);
        
    return view('edit', compact('date'));
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
        $date=Date::find($id);
        $date->delete();
        return redirect()->route('date.index');
    }
}
