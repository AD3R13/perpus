<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Peminjam::get();
        return view('peminjam.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Anggota::orderBy('id', 'desc')->get();
        return view('peminjam.create', compact('data'));
    }
    public function store(Request $request)
    {
        Peminjam::create($request->all());
        Alert::success('Daftar berhasil', 'Success Message!');
        return redirect()->to('peminjam')->with('success', 'Daftar berhasil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $edit = Peminjam::find($id);
        return view('peminjam.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Peminjam::where('id', $id)->update([
            "id_anggota" => $request->id_anggota,
            "no_peminjam" => $request->no_Peminjam
        ]);
        Alert::info('Data telah diubah', 'Success Message!');
        return redirect()->to('peminjam')->with('info', 'Berhasil diubah');
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
        Peminjam::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->to('peminjam')->with('success', 'Berhasil dihapus');
    }
}
