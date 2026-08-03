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

    public function adminIndex() {
        $dataTeacher = Teacher::all();
        return view('admin.teacher.index', compact('dataTeacher'));
    }

    public function create() {
        return view('admin.teacher.create');
    }

    // public function store(Request $request) {
    //     $request->validate([
            
    //     ])
    // }
}