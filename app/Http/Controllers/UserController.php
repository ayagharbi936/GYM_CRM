<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(Request $request){ 
        $validator = Validator::make($request->all(), [ 
            'email' => 'required|email', 
            'password' => 'required', 
            
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        if(Auth::attempt(['email' => $request->json('email'), 'password' => $request->json('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            $success['name'] =  $user->name;
            return response()->json(['success' => $user], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required|min:6', 
            'c_password' => 'required|same:password', 
            
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken;
        $success['name'] =  $user->name;
return response()->json(['success'=>$user], $this-> successStatus); 
    }
    
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

    
    public function updatemobile(Request $request,$id) 
    
    {  $user = User::findOrFail($id);
       $user->update($request->all());
       return ['success' =>  $user];
        
    }
    public function managers()
    {
     $users = User::all()->sortByDesc('created_at');

     return view('users.managers')->with('users', $users);
    } 
    public function index()
    {
     $users = User::all()->sortByDesc('created_at');

     return view('users.index')->with('users', $users);
    }
/**
     * Display the specified resource.
     *
      * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request ,[
            'role' => 'required',
        ]);

        $user = User::find($id);
        if(auth()->user()->role =='Owner'){
            $user ->member_in =$request->input('member_in');
        }
        $user ->role =$request->input('role');
                   $user->save();
           
            return redirect('/users')->with('success',' Role modifié avec succès');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user',$user);
    }

    public function create()
    {
        return view('users.create');
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
            'email' => 'required' ,
            'password' => 'required' ,
           

        ]);
        //create user
        $user = new user;
        $user ->name =$request->input('name');
        $user ->email =$request->input('email');
        $user ->password =$request->input('password');
        $user ->created_by =auth::user()->id;
        $user->save();
        return redirect('/users')->with('success','utilisateur bien ajouté');
    }  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id )
   {
       $user = User::find($id);
       return view('users.show')->with('user',$user);
   }
   public function search(Request $request)
   {
       $users = \DB::table('users');
       if( $request->input('search')){
            $users = User::where('email', 'like', "%" . $request->input('search') . "%")->get();
       }
      return view('users.index', ['users'=>$users]);
   }

}
    
