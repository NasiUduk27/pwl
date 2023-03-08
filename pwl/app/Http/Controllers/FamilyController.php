<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $families = Family::all();
        return view('families.index', ['families' => $families]);
    }
}
