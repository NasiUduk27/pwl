<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = course::all();
        return view('courses.index', ['courses' => $courses]);
    }
}
