<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Buku::get();
        return view('buku.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }
    public function store(Request $request)
    {
        Buku::create($request->all());
        Alert::success('Daftar berhasil', 'Success Message!');
        return redirect()->to('buku')->with('success', 'Daftar berhasil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit(string $id)
    {
        $edit = Buku::find($id);
        return view('buku.edit', compact('edit'));
    }
    public function update(Request $request, string $id)
    {
        Buku::where('id', $id)->update([
            "nama_buku" => $request->nama_buku,
            "penerbit" => $request->penerbit,
            "qty" => $request->qty,
            "deskripsi" => $request->deskripsi,
            "penulis" => $request->penulis,
            "genre" => $request->genre,
        ]);
        Alert::info('Data telah diubah', 'Success Message!');
        return redirect()->to('buku')->with('info', 'Berhasil diubah');
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
        Buku::where('id', $id)->delete();
        toast('Data berhasil di hapus', 'success');
        return redirect()->to('buku')->with('success', 'Berhasil dihapus');
    }
}
