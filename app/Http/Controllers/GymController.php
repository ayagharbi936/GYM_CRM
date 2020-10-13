<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Gym ; 
class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexweb()
    {
        $gyms=Gym::all()->sortByDesc('created_at');

     return view('gyms.index')->with('gyms', $gyms);
    }

    public function index()
    {
        $gyms=Gym::all();
         return response()->json($gyms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gyms.create');
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
            'name' => 'required' ,
            'image_src' => 'image|nullable|max:1999']);

          // Handle File Upload
          if($request->hasFile('image_src')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image_src')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image_src')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image_src')->storeAs('storage/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create gym
        $gym = new gym;
        $gym ->name =$request->input('name');
        $gym ->adress =$request->input('adress');
        $gym ->description =$request->input('description');
        $gym ->phone_number =$request->input('phone_number');
        $gym ->id = auth()->user()->id;
        $gym->image_src = $fileNameToStore;

        $gym->save();
        return redirect('/gyms')->with('success','salle de sport  ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_gym
     * @return \Illuminate\Http\Response
     */
    public function show($id_gym)
    {
        $gym = Gym::find($id_gym);

        
        if (Auth()->check()){
            if(auth()->user()->role != 'Client') {
                return view('gyms.show')->with('gym',$gym); 
            } else 
            {return view('gyms.showusers')->with('gym',$gym); }
        }


        else {
            return view('gyms.showusers')->with('gym',$gym);
        
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_gym
     * @return \Illuminate\Http\Response
     */
    public function edit($id_gym)
    {
        $gym = Gym::find($id_gym);
        return view('gyms.edit')->with('gym',$gym);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_gym)
    {
        $this -> validate($request ,[
            'name' => 'required' ,
            
            'image_src' => 'image|nullable|max:1999']);

            $gym = Gym::find($id_gym);

          // Handle File Upload
          if($request->hasFile('image_src')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image_src')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image_src')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image_src')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create gym
       
        $gym ->name =$request->input('name');
        $gym ->adress =$request->input('adress');
        $gym ->description =$request->input('description');
        $gym ->phone_number =$request->input('phone_number');
        $gym->save();
        return redirect('/gyms')->with('success','salle de sport  modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_gym
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_gym)
    {
        $gym = Gym::find($id_gym);
        $gym->delete();
        return redirect('/gyms')->with('success','salle de sport supprimé');
    }
    
}
