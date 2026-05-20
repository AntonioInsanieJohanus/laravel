<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = prodi::orderByDesc('created_at')->get();

        return view('prodi.list-prodi', [
            'prodis' => $prodis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("prodi.add-prodi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_prodi' => ['required', 'max:100'],
            'nama_kaprodi' => ['required', 'max:100'],
            'alias_prodi' => ['required']
        ],
        [
            'nama_prodi.required' => 'Nama Prodi wajib diisi',
            'nama_prodi.max' => 'Nama Prodi maksimal 100 karakter',
            'nama_kaprodi.required' => 'Nama Kaprodi wajib diisi',
            'nama_kaprodi.max' => 'Nama Kaprodi maksimal 100 karakter',
            'alias_prodi.required' => 'Alias prodi wajib diisi',
        ]);

        prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi,
            'alias_prodi' => $request->alias_prodi
        ]);

        return redirect()->route("prodi.index")->with('success', "Berhasil ditambahkan data prodi");
    }

    /**
     * Display the specified resource.
     */
    public function show(prodi $prodi)
    {
        // Menampilkan detail satu prodi
        return view('prodi.detail-prodi', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodi $prodi)
    {
        // Menampilkan form edit dengan membawa data prodi yang dipilih
        return view('prodi.edit-prodi', [
            'prodi' => $prodi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodi $prodi)
    {
        // Jalankan validasi yang sama seperti saat store data
        $request->validate([
            'nama_prodi' => ['required', 'max:100'],
            'nama_kaprodi' => ['required', 'max:100'],
            'alias_prodi' => ['required']
        ],
        [
            'nama_prodi.required' => 'Nama Prodi wajib diisi',
            'nama_prodi.max' => 'Nama Prodi maksimal 100 karakter',
            'nama_kaprodi.required' => 'Nama Kaprodi wajib diisi',
            'nama_kaprodi.max' => 'Nama Kaprodi maksimal 100 karakter',
            'alias_prodi.required' => 'Alias prodi wajib diisi',
        ]);

        
        $prodi->update([
            'nama_prodi' => $request->nama_prodi,
            'nama_kaprodi' => $request->nama_kaprodi,
            'alias_prodi' => $request->alias_prodi
        ]);

        return redirect()->route("prodi.index")->with('success', "Berhasil mengubah data prodi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodi $prodi)
    {
        
        $prodi->delete(0);

        return redirect()->route("prodi.index")->with('success', "Berhasil menghapus data prodi");
    }
}