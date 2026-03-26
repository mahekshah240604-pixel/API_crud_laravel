<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
      public function student()
    {
        return view('/student');
    }
    public function display()
    {
        // return view("/display");
         $mydata=DB::table('students')->get();
        return view('display',compact('mydata'));

    }
    public function delete($id)
    {
        DB::table('students')->where('student_id','=',$id)->delete();
        return redirect('display');
    }
    public function edit($id)
    {
         $edit=DB::table('students')->where('student_id','=',$id)->first();
        return view('edit',compact('edit'));
    }
    public function update(Request $request,$id)
    {
       $name=$request->input('sname');
        $mobile=$request->input('smobile');

        $edit=DB::table('students')->where('student_id',$id)->update(['student_name'=>$name,'student_mobile'=>$mobile]);
        // return view('edit',compact('edit'));
        return redirect('display');
    }

}
