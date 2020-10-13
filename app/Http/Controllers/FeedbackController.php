<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback; 
 

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {    $feedbackuser=[];
        $feedbacks = Feedback::all()->sortByDesc('created_at');
        foreach($feedbacks as $feedback){
        $feedbackuser[]= ['user'=> $feedback->user,'feed'=>$feedback,'gym'=>$feedback->gym ];
        
         }
         return ['message' => $feedbackuser];
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
        $feedback = new Feedback;
        $feedback->id_gym = $request->id_gym;
        $feedback->id = $request->id;
        $feedback->content = $request->content;
        $feedback->rate= $request->rate;
        $feedback->save();
        return ['message' => $feedback];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      $feedbackuser=[];
        $feedbacks = Feedback ::where('id_gym', $id)->orderBy('created_at', 'desc')->get();
        foreach($feedbacks as $feedback){
        $feedbackuser[]= ['user'=> $feedback->user,'feed'=>$feedback,'gym'=>$feedback->gym ];
        
         }
         return ['message' => $feedbackuser];
         

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
        $feedback = Feedback::findOrFail($id)->delete();    
        
    }
}
