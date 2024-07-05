<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Level;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Anggota::with('level')->get();
        return view('anggota.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Level::all();
        $usertype = Anggota::with('level')->get();
        return view('anggota.create', compact('usertype', 'level'));
    }
    public function store(Request $request)
    {
        Anggota::create($request->all());
        Alert::success('Daftar berhasil', 'Success Message!');
        return redirect()->to('anggota')->with('success', 'Daftar berhasil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $level = Level::all();
        $usertype = Anggota::get();
        $edit = Anggota::find($id);
        return view('anggota.edit', compact('edit', 'usertype', 'level'));
    }
    public function update(Request $request, string $id)
    {
        Anggota::where('id', $id)->update([
            "nama_anggota" => $request->nama_anggota,
            "email" => $request->email,
            "no_tlp" => $request->no_tlp,
            "id_level" => $request->id_level,
        ]);
        Alert::info('Data telah diubah', 'Success Message!');
        return redirect()->to('anggota')->with('info', 'Berhasil diubah');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Anggota::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'info');
        return redirect()->to('anggota')->with('success', 'Berhasil dihapus');
    }
}
