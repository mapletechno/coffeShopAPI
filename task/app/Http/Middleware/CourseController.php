<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    //

    public function index()
    {

    	$courses = Course::all();
//return $courses;
    	return view('registerCourse', ['courses'=>$courses]);
    }
}
