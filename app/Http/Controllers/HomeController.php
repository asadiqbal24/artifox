<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
     return view('user.welcome');
    }
    public function get_started()
    {
      return view('user.get_started');
    }

    function searchIcons(Request $request){

        $files = \Storage::disk('public')->allFiles($request->val);
        $allFiles = [];
        $x = '<div class="row">';
        foreach($files as $f){

            $x = $x.'<div class="col-md-2" style="background-color:white;margin:5px;"><img onclick="loadIcon(this)" class="newloadedIcon" style="width:50px;height:50px;cursor:pointer" src="'.asset('storage/'.$f).'"></div>';
/*            array_push($allFiles,$x);*/
        }

        $x = $x.'</div>';
        return $x;
    }

}
