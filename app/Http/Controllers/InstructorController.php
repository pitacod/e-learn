<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index(){
        $users =User::where('role','instructor')->paginate(4);
        return view ('instructor.index',['users'=>$users]);
    }

    public function show($id){
       $user = User::findOrFail($id);
        return view('instructor.show',['user'=>$user]);
    }
}
