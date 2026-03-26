<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class apicontroller extends Controller
{
  

    public function studentpro(Request $request)
    {
        $name=$request->input('sname');
        $mobile=$request->input('smobile');

        DB::table('students')->insert(['student_name'=>$name,'student_mobile'=>$mobile]);
        $responce=[
            "flag"=>"1",
            "massage"=>"record added successfully",
        ];
        return response()->json($responce);
    }
    public function display()
    {
        $mydata=DB::table('students')->get();
        //  return view('display',compact('mydata'));
        $responce=[
            "flag"=>"1",
            "massage"=>"the reccord is display",
            "data"=>$mydata
        ];
       return response()->json($responce);
    }
     public function delete($id)
    {
        DB::table('students')->where('student_id','=',$id)->delete();
        // return redirect('display');
        $responce=[
            "flag"=>"1",
            "massage"=>"recorde is delete",
        ];
        return response()->json($responce);
    }
    public function edit($id)
    {
        $edit=DB::table('students')->where('student_id','=',$id)->first();
        //  return response()->json($edit); 
        return view('edit',compact('edit'));
    }

    public function update(Request $request)
    {
          $id = $request->input('student_id'); 
        $name=$request->input('sname');
        $mobile=$request->input('smobile');

        DB::table('students')->where('student_id',$id)->update(['student_name'=>$name,'student_mobile'=>$mobile]);
        // return view('edit',compact('edit'));
        // return redirect('/students');
         $responce=[
            "flag"=>"1",
            "massage"=>"recorde is update",
             "data"=>[
            "student_id" => $id,
            "student_name" => $name,
            "student_mobile" => $mobile
        ]
        ];
        return response()->json($responce);
    }

    public function employeepro(Request $request)
    {
        $name=$request->input('ename');
        $mobile=$request->input('emobile');

        DB::table('employees')->insert(['emp_name'=>$name,'emp_mobile'=>$mobile]);

        $responce=[
            "flag"=>"1",
            "massage"=>"record added sucessfully",
        ];
        return response()->json($responce);
    }

    public function edisplay()
    {
        $mydata=DB::table('employees')->get();
        // return view('edisplay',compact('mydata'));

        $responce=[
            "flag"=>"1",
            "massage"=>"record display",
            "data"=>$mydata,
        ];
        return response()->json($responce);
    }

    public function edelete($id)
    {
        DB::table('employees')->where('employee_id','=',$id)->delete();
        $responce=[
            "flag"=>"1",
            "massage"=>"recod is delete",

        ];
        return response()->json($responce);

    }


    public function eedit($id)
    {
        $edit=DB::table('employees')->where('employee_id','=',$id)->first();
        return view('eedit',compact('edit'));
    }

    public function eupdate(Request $request)
    {
        $id=$request->input('employee_id');
        $name=$request->input('ename');
        $mobile=$request->input('emobile');

        DB::table('employees')->where('employee_id',$id)->update(['emp_name'=>$name,'emp_mobile'=>$mobile]);
        $responce=[
            "flag"=>"1",
            "massage"=>"recorde has been update",
            "data"=>[
            "employee_id" => $id,
            "emp_name" => $name,
            "emp_mobile" => $mobile
            ]
        ];
        return response()->json($responce);
    }
}
