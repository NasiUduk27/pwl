<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        return view('program', [
            'title' => 'Karir',
            'program' => ['Karir', 'Magang', 'Kunjungan Industri']
        ]);
    }

    public function Karir() {
        return view('program', [
            'title' => 'Karir',
            'program' => ['Karir', 'Magang', 'Kunjungan Industri']
        ]);
    }

    public function Magang() {
        return view('program', [
            'title' => 'Magang',
            'program' => ['Karir', 'Magang', 'Kunjungan Industri']
        ]);
    }

    public function KunjunganIndustri() {
        return view('program', [
            'title' => 'Kunjungan Industri',
            'program' => ['Karir', 'Magang', 'Kunjungan Industri']
        ]);
    }
}

