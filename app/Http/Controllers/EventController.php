<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $eventuser=[];
        $events=Event::all()->sortBy('startDate');
        foreach($events as $event){
            $eventuser[]= ['user'=> $event->user,'event'=>$event ];
            
             }
             return ['data' => $eventuser];
    }
    public function comingEvents()
    {   $eventuser=[];
        $events=Event::paginate(3)->sortBy('startDate');
        foreach($events as $event){
            $eventuser[]= ['user'=> $event->user,'event'=>$event ];
            
             }
             return ['data' => $eventuser];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $event = new Event;
        $event->id = $request->id;
        $event->name = $request->name;
        $event->startDate= $request->startDate;
        $event->startTime= $request->startTime;
        $event->endDate= $request->endDate;
        $event->endTime= $request->endTime;
        $event->location = $request->location;
        $event->detail = $request->detail;
        $event->image_src = $request->image_src;
        $event->save();
        return ['message' => $event];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventuser=[];
        $events=Event::where('id', $id)->orderBy('created_at', 'desc')->get();
        foreach($events as $event){
            $eventuser[]= ['event'=>$event ];
            
             }
             return ['data' => $eventuser];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
