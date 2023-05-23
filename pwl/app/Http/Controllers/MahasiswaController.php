<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::with('kelas')->get();
        return view('mahasiswa.mahasiswa')->with('mhs', $mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', [
            'url_form' => url('/mahasiswa'),
            'kelas'=> $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'foto' => 'mimes:jpg,jpeg,png,gif'
            
        ]);

        $mhs = new MahasiswaModel();
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->hp = $request->get('hp');

        if ($request->file('foto')) {
            $link = $request->file('foto')->store('foto', 'public');
        }

        $mhs->foto = $link;

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');
        
        $mhs->kelas()->associate($kelas);
        $mhs->save();

        return redirect('mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = MahasiswaModel::find($id);

        return view('mahasiswa.create_mahasiswa')
        ->with('mhs', $mhs)
        ->with('kelas', Kelas::all())
        ->with('url_form', url('/mahasiswa/'.$id));
    }

    public function showkhs(MahasiswaModel $mahasiswa, $id){
        $mahasiswa = MahasiswaModel::with('kelas','matakuliah')->find($id);
        $khs = $mahasiswa->matakuliah()->withPivot('nilai')->get();
        return view('mahasiswa.khs')->with('mahasiswa', $mahasiswa)->with('khs', $khs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'foto' => 'mimes:jpg,png,jpeg,gif'
        ]);

        $mhs = MahasiswaModel::find($id);
        $mhs->nim = $request->get('nim');
        $mhs->nama = $request->get('nama');
        $mhs->jk = $request->get('jk');
        $mhs->tempat_lahir = $request->get('tempat_lahir');
        $mhs->tanggal_lahir = $request->get('tanggal_lahir');
        $mhs->alamat = $request->get('alamat');
        $mhs->hp = $request->get('hp');
       
        if($request->file('foto')){
            if($mhs->foto && file_exists(storage_path('app/public/' . $mhs->foto))){
                Storage::delete('public/' . $mhs->foto);
            }

            $link = $request->file('foto')->store('foto', 'public');
            $mhs->foto = $link;

        }

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        $mhs->kelas()->associate($kelas);
        $mhs->save();
        return redirect('mahasiswa')->with('success', 'Data mahasiswa berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
    }

    public function pdf($id){
        $mahasiswa = MahasiswaModel::with('kelas', 'matakuliah')->find($id);
        $khs = $mahasiswa->matakuliah()->withPivot('nilai')->get();
        $pdf = PDF::loadView('mahasiswa.cetak_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();

    }
}
