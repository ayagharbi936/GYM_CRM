<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Index";
        return view('index')->with('title',$title);
    }
    public function about(){
        $title="about";
        return view('about')->with('title',$title);
    }
    public function services(){
        $data=array(
       'title'=>'services',
       'services'=>['Web design','Programming','SEO']
        );
        return view('services')->with($data);
    }

    public function dashboard(){
        return view('layouts.dashboard');
    }
    public function allgyms() {
        return view('pages.allGyms');
    }

    public function managers() {
        return view('users.managers');
    }
} 