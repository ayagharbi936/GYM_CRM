<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


use App\Subscription; 
class subscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subscriptions =Subscription::orderBy('created_at','desc')->paginate(10);

        return view('subscription.index')->with('subscriptions', $subscriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request ,[
            
            'expired_at' => 'required' ,
        ]);


        //create membership
        $subscription = new Subscription;
        
        $subscription->expired_at =$request->input('expired_at');
        if(auth()->user()->role =='Owner')
        {
            $subscription ->id_gym=$request->input('id_gym');
           
        }
        elseif(auth()->user()->role =='Manager'){
            $subscription->id_gym=auth()->user()->member_in;
        }
        $subscription->id_cours =$request->input('id_course');

        $subscription->id=$request->input('id');
        $subscription->save();
        return  redirect('subscription')->with('success','Abonnement a été ajouté');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function search(Request $request)
    {      
      if( $request->input('search')){  
        $subscriptions =Subscription::whereHas('userMember', function (Builder $query) use($request) {
            $query->where('email', 'like',"%" . $request->input('search') . "%");
             })->get();
        return view('subscription.index', ['subscriptions'=>$subscriptions]);
 }
    }
  }
