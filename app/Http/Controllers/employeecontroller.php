<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    public function  employee()
    {
        return view('employee');
    }

    public function edisplay()
    {
        $mydata=DB::table('employees')->get();
        return view('edisplay',compact('mydata'));

    }

    public function delete($id)
    {
        DB::table('employees')->where('employee_id','=',$id)->delete();
        return redirect('edisplay');
    }

    public function edit($id)
    {
        $edit=DB::table('employees')->where('employee_id','=',$id)->first();
        return view('edit',compact('edit'));
    }

    public function eupdate(Request $request,$id)
    {
        $name=$request->input('ename');
        $mobile=$request->input('emobile');

        DB::table('employees')->where('employee_id',$id)->update(['emp_name'=>$name,'emp_mobile'=>$mobile]);
        return redirect('edisplay');
    }
}
