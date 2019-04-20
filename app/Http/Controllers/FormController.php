<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class FormController extends Controller
{
    //
    public function Home(){
    	$getAll = Student::all()->toArray();
    	return view('formProject.forms', compact('getAll'));
    } 

    public function StoreData(Request $request){
         $student = new Student([
         	'name' => $request->get('name'),
            'reg_no' => $request->get('reg_no'),
         	'roll_no' => $request->get('roll_no'),
         	'course' => $request->get('course'),
         	'email' => $request->get('email'),
         	'phone' => $request->get('phone')
         ]);
         $student->save();

         $getAll = Student::all()->toArray();

         return view('formProject.forms', ['getAll' => $getAll, 'message' => 'Data saved' ]);
    }

    // public function Destroy(Request $request) {
        
    // 	$stu = Student::where('name', $request->get('name'));
    // 	$stu->delete();

    // 	return redirect('forms')->with('status', 'Data Deleted');
    // }
}



