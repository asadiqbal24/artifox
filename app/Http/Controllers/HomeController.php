<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTempImages;
class HomeController extends Controller
{
    public function welcome()
    {
    $cutShapes = \Storage::disk('public')->allFiles('cutShapes');

     return view('user.welcome',compact('cutShapes'));
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


    public function final_design()
    {
        return view('user.final_design');
    }

    public function final_design_ready()
    {
        $random = rand(1111111111,9999999999);
        if(!\Session::has('identifier')){
            \Session::put('identifier',$random);            
        }

        return view('user.final_design_ready',compact('random'));
    }

    public function save_temp_image(Request $request){

            $img = $request->img;//getting post img data
            $image = str_replace('data:image/png;base64,', '', $img);
            $image = str_replace(' ', '+', $image);
            $imageName = \Session::getID().'/'.\Session::getID().'.png';

            $new = UserTempImages::where('session_id',\Session::getID())->first();
            if(empty($new)){
                $new  = new UserTempImages();
            }
            $new->session_id = \Session::getID();   
            $new->identifier_code = \Session::get('identifier');   
            $new->save();


            \Storage::disk('local')->put('public/temp/images/'.$imageName, base64_decode($image));            
    }

        function generateRandomString($length = 0) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

}
