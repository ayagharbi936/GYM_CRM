<?php

namespace App\Http\Controllers;
use App\EventParticipant;
use Illuminate\Http\Request;

class EventParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $eventp = new EventParticipant;
        $eventp->id = $request->id;
        $eventp->id_event = $request->id_event;
        
        $eventp->save();
        return ['message' => $eventp];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $eventP = EventParticipant ::where('id', $id)->orderBy('created_at', 'desc')->get();            
        return ['message' => $eventP];
    }
    public function showevent($id)
    {    
        $eventUser=[];
        $eventsP = EventParticipant ::where('id', $id)->orderBy('created_at', 'desc')->get(); 
        foreach($eventsP as $eventP){
        $eventUser[]= ['event'=> $eventP->event];
        }                       
        return ['message' => $eventUser];
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
