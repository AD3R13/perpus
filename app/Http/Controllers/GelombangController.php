<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Gelombang::get();
        return view('gelombang.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gelombang::create($request->all());
        Alert::success('Data berhasil ditambah', 'Success Message!');
        return redirect()->to('gelombang')->with('success', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Gelombang::find($id);
        return view('gelombang.edit', compact('edit',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gelombang::where('id', $id)->update([
            "nama_gelombang" => $request->nama_gelombang
        ]);
        Alert::info('Data telah diubah', 'Success Message!');
        return redirect()->to('gelombang')->with('info', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gelombang::where('id', $id)->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect()->to('gelombang')->with('success', 'Berhasil dihapus');
    }
}
