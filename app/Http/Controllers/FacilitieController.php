<?php

namespace App\Http\Controllers;

use App\Models\Facilitie;


class FacilitieController extends Controller
{
    public function index() {
        $dataFacilitie = Facilitie::all();
        return view('facilities.index', compact('dataFacilitie'));
    }
}
