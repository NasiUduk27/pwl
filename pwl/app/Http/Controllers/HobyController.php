<?php

namespace App\Http\Controllers;

use App\Models\Hoby;
use Illuminate\Http\Request;

class HobyController extends Controller
{
    public function index(){

        $hobies = Hoby::all();

        return view('hobies.index', ['hobies' => $hobies]);
    }
}
