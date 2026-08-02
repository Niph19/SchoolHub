<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $dataTeacher = Teacher::all();
        return view('teachers.index', compact('dataTeacher'));
    }
}
