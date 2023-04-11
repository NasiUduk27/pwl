<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = CourseModel::all();
        return view('courses.courses')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create_courses')->with('url_form', url('/courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'sks' => 'required|string',
            'semester' => 'required|string',
        ]);

       $data = CourseModel::create($request->except(['_token']));
       return redirect('courses')->with('success', 'Data course berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fsc  $fsc
     * @return \Illuminate\Http\Response
     */
    public function show(CourseModel $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = CourseModel::find($id);

        return view('courses.create_courses')
        ->with('courses', $courses)
        ->with('url_form', url('/courses/' .$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'sks' => 'required|string',
            'semester' => 'required|string',
        ]);


        $data = CourseModel::where('id', '=' ,$id)->update($request->except(['_token', '_method']));
        return redirect('courses')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseModel::where('id', '=', $id)->delete();
        return redirect('courses')->with('success', 'Data berhasil dihapus');
    }
}
