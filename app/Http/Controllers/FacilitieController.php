<?php

namespace App\Http\Controllers;

use App\Models\Facilitie;


class FacilitieController extends Controller
{
    public function index() {
        $dataFacilitie = Facilitie::all();
        return view('facilities.index', compact('dataFacilitie'));
    }

    public function adminIndex() {
        $dataFacilitie = Facilitie::all();
        return view('admin.facilities.index', compact('dataFacilitie'));
    }
}
