<?php

namespace App\Http\Controllers;

use App\Models\Hoby;
use App\Models\HobyModel;
use Illuminate\Http\Request;

class HobyController extends Controller
{
    public function index()
    {

        $hobies = HobyModel::all();

        return view('hobies.hobies')->with('hobies', $hobies);
    }

    public function create()
    {

        return view('hobies.create_hobies')->with('url_form', url('/hobies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        $data = HobyModel::create($request->except(['_token']));
        return redirect('hobies')->with('success', 'Data hoby berhasil ditambahkan');
    }

    public function show(HobyModel $hoby)
    {
        //
    }

    public function edit($id)
    {
        $hobies = HobyModel::find($id);

        return view('hobies.create_hobies')
        ->with('hobies', $hobies)
        ->with('url_form', url('/hobies/' . $hobies->id));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        $data = HobyModel::where('id', '=' ,$id)->update($request->except(['_token', '_method']));
        return redirect('hobies')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id) {
        HobyModel::where('id', '=', $id)->delete();
        return redirect('hobies')->with('success', 'Data berhasil dihapus');
    }



    
}
