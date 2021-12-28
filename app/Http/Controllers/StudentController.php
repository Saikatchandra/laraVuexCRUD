<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        // dd('dd');
        $data = [
            'scope' => 'create'
        ];
        return view('student.form')->with($data);
    }
}
