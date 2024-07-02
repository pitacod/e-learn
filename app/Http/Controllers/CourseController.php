<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

    public function index(){
        $courses = Course::paginate(10);
        $categories = Category::all();
        return view('course.index',['courses'=>$courses,'categories'=>$categories]);

    }

    public function show($id){
        $course = Course::findOrFail($id);

        return view('course.show',['course'=>$course]);
        
    }

    public function showByCategory($cat){ 
        $cat = Category::where('nom', $cat)->firstOrFail();
        $courses = Course::where('category_id', $cat->id)->paginate(10);
        $categories = Category::all();
        return view('course.index',['courses'=>$courses,'categories'=>$categories]);
    }
}
