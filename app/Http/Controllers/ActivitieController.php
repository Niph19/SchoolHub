<?php

namespace App\Http\Controllers;

use App\Models\Activitie;

class ActivitieController extends Controller
{
    public function index() {
        $dataActivitie = Activitie::all();
        return view('activities.index', compact('dataActivitie'));
    }
}
