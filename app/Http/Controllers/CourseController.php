<?php

namespace App\Http\Controllers;
use App\Course; 

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all()->sortByDesc('created_at');
        return view('courses.index')->with('course', $course);
    }
    public function indexmobile($id)
    {
        $courses = Course::where('id_gym', $id)->get();
        return response()->json(['success' =>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'description'=> 'required' ,
            'duration' => 'required' ,
            'frequency' => 'required' ,
            'target' => 'required' ,
            'recommended_outfit' => 'required' ,
            'price_month' => 'required' ,
            'price' => 'required' ,
            

        ]);
        //create course
        $course = new Course;
        $course ->name =$request->input('name');
        $course ->description =$request->input('description');
        $course ->duration =$request->input('duration');
        $course ->frequency =$request->input('frequency');
        $course ->target=$request->input('target');
        $course ->recommended_outfit =$request->input('recommended_outfit');
        $course ->price_month =$request->input('price_month');
        $course ->price=$request->input('price');
        if(auth()->user()->role =='Owner')
        {
        $course ->id_gym=$request->input('id_gym');
        }
        elseif(auth()->user()->role =='Manager'){
            $course ->id_gym=auth()->user()->member_in;
        }
        $course->save();
        return redirect('/courses')->with('success','cours bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_cours
     * @return \Illuminate\Http\Response
     */
    public function show($id_cours)
    {
        $course = Course::find($id_cours);
        
        if (Auth()->check()){
            if(auth()->user()->role != 'Client') {
                return view('courses.show')->with('course',$course);
            } else 
            {return view('courses.userShow')->with('course',$course); }
        }


        else {
            return view('courses.userShow')->with('course',$course);
        
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_cours
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cours)
    {
        $course = Course::find($id_cours);
        return view('courses.edit')->with('course',$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_cours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cours)
    {
        $this -> validate($request ,[
            'name' => 'required' ,
            'description'=> 'required' ,
            'duration' => 'required' ,
            'frequency' => 'required' ,
            'target' => 'required' ,
            'recommended_outfit' => 'required' ,
            'price_month' => 'required' ,
          



        ]);

        $course = Course::find($id_cours);

        $course ->name =$request->input('name');
        $course ->description =$request->input('description');
        $course ->duration =$request->input('duration');
        $course ->frequency =$request->input('frequency');
        $course ->target=$request->input('target');
        $course ->recommended_outfit =$request->input('recommended_outfit');
        $course ->price_month =$request->input('price_month');
        $course ->price=$request->input('price');
        $course ->id_gym=auth()->user()->member_in;

        $course->save();
return redirect('/courses')->with('success',' cour modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_cours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cours)
    {
        $course = Course::find($id_cours);


        $course->delete();

            return redirect('/courses')->with('success','le cour est supprimé');

    }
}
