<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        // dd('dd');
        $data = [
            'scope' => 'create'
        ];
        return view('student.form')->with($data);
    }

    public function store(Request $request){
        // dd($request->all());
        $student = new Student();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->email = $request->email;
        $student->save();

        return response()->json([
            'status'=>200,
            'message'=> "Student saved successfully",
        ]);
    }
}
