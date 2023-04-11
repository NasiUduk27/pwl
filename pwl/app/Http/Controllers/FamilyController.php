<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\FamilyModel;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $families = FamilyModel::all();
        return view('families.families')->with('families', $families);
    }

    public function create()
    {
        return view('families.create_families')->with('url_form', url('/families'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'telepon' => 'required|string',
            'hubungan' => 'required|string',
        ]);

       $data = FamilyModel::create($request->except(['_token']));
       return redirect('families')->with('success', 'Data course berhasil ditambahkan');

    }

    public function show(FamilyModel $family)
    {
        //
    }

    public function edit($id)
    {
        $families = FamilyModel::find($id);

        return view('families.create_families')
        ->with('families', $families)
        ->with('url_form', url('/families/' .$id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'telepon' => 'required|string',
            'hubungan' => 'required|string',
        ]);


        $data = FamilyModel::where('id', '=' ,$id)->update($request->except(['_token', '_method']));
        return redirect('families')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        FamilyModel::where('id', '=', $id)->delete();
        return redirect('families')->with('success', 'Data berhasil dihapus');
    }


}
