<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjam;
use App\Models\DetailPeminjam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Peminjam::with('anggota')->get();
        // $user = Anggota::get();
        // $user = Peminjam::get();
        return view('peminjam.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kode_transaksi = Peminjam::orderBy('id', 'desc')->first();
        if (isset($kode_transaksi)) {
            $urutan = $kode_transaksi->id;
        } else {
            $urutan = 0;
        }
        $huruf = "TR";
        // $urutan = $kode_transaksi->id;
        $urutan++;
        $kode_transaksi = $huruf . date('dmY') . sprintf('%03s', $urutan);
        $data = Anggota::orderBy('id', 'desc')->get();
        $buku = Buku::get();
        return view('peminjam.create', compact('data', 'kode_transaksi', 'buku'));
    }
    public function store(Request $request)
    {
        // return $request;
        $peminjam = Peminjam::create([
            'id_anggota' => $request->id_anggota,
            'no_transaksi' => $request->no_transaksi,
        ]);

        foreach ($request->id_buku as $index => $id_buku) {
            DetailPeminjam::create([
                'id_peminjam' => $peminjam->id,
                'id_buku' => $id_buku,
                'tanggal_pinjam' => $request->tanggal_pinjam[$index],
                'tanggal_kembali' => $request->tanggal_kembali[$index],
            ]);
        };
        return redirect()->to('peminjam');
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
            "no_transaksi" => $request->no_transaksi
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
