<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Post;
use App\Models\Activitie;
use App\Models\Facilitie;
use App\Models\Teacher;



class HomeController extends Controller
{
    public function index() {
        $dataProgram = Program::all();
        $dataPost = Post::all();
        $dataActivity = Activitie::all();
        return view('home', compact('dataProgram', 'dataPost', 'dataActivity'));
    }

    public function dashboardAdmin() {
        $dataProgram = Program::all();
        $dataPost = Post::all();
        $dataActivity = Activitie::all();
        $dataFacilitie = Facilitie::all();
        $dataTeacher = Teacher::all();
        return view('admin.dashboard', compact('dataProgram', 'dataPost', 'dataActivity', 'dataFacilitie', 'dataTeacher'));
    }
}
