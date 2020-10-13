<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;
use App\Gym ; 

class SearchController extends Controller
{
    public function simple($name)
    {
        $data =Gym::where('name', 'LIKE', "%" . $name . "%")->get();      
        return response()->json(['data' =>$data]);
    }
    public function advanced($name)
    {
        $data =Gym::whereHas('cours', function (Builder $query) use($name)  {
        $query->where('name', 'LIKE',"%" . $name . "%");
        })->get();
        return response()->json(['data' =>$data]);

    }
}
