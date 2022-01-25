<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTempImages;

class AdminController extends Controller
{
    public function admin_home()
    {
       return view('admin.admin_home');
    }

    public function design_list()
    {
      $design_list=UserTempImages::orderBy('id','Desc')->paginate(10);
      return view('admin.design_list',compact('design_list')); 
    }
    public function design_approve($id,$type)
    {
       
  if ($type=='Approve') {
    $approve=UserTempImages::where('id',$id)->update(['status' =>1]);
    toast('You have Approve The Design','success');
    return redirect()->back();
  }
  else if ($type=='Disapprove') {
     $disapprove=UserTempImages::where('id',$id)->update(['status'=>-1]);
       toast('You have DisApprove The Design','success');
        return redirect()->back();
  }

    }
    public function admin_design_delete($id)
    {
       $delete=UserTempImages::where('id',$id)->delete();
        toast('You have Delete The Design','success');
       return redirect()->back();
    }
}
