<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {

    // $students = Student::all();

    // // dd($student);
    // foreach($students as $student){
    //     echo $student->name. "<br>";
    // };

    $student = new Student();
    $student->name = "New";
    $student->email = "email@gmail.com";
    $student->save();
    }
}
