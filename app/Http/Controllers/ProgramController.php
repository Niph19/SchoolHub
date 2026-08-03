<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $dataProgram = Program::all();
        return view('programs.index', compact('dataProgram'));
    }

    public function show($id)
    {
        $dataProgram = Program::findOrFail($id);
        return view('programs.show', compact('dataProgram'));
    }

    public function adminIndex() {
        $dataProgram = Program::all();
        return view('admin.program.index', compact('dataProgram'));
    }


    public function store(Request $request)
    {

    }
    public function create()
    {
        return view('programs.create');
    }

    public function edit($id) {

    }

    public function delete($id) {

    }
}
