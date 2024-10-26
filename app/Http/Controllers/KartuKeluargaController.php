<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Http\Requests\StoreKartuKeluargaRequest;
use App\Http\Requests\UpdateKartuKeluargaRequest;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('page.kartu_keluarga.index');
    }

    public function fetchData()
    {
        $data = KartuKeluarga::select('id', 'no_kartu_keluarga', 'nama_kepala_keluarga', 'alamat')
            ->orderBy('id', 'desc')
            ->get();
        return view('page.kartu_keluarga.table')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.kartu_keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKartuKeluargaRequest $request)
    {
        try {
            // Menyimpan data Kartu Keluarga
            KartuKeluarga::create([
                'no_kartu_keluarga' => $request->no_kartu_keluarga,
                'nama_kepala_keluarga' => $request->nama_kepala_keluarga,
                'alamat' => $request->alamat,
                'desa' => $request->desa,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'provinsi' => $request->provinsi,
                'kode_pos' => $request->kode_pos,
            ]);

            // Kembalikan respons JSON jika berhasil
            return response()->json(['success' => true, 'message' => 'Data Kartu Keluarga berhasil ditambahkan.']);
        } catch (\Exception $e) {
            // Tangkap error dan kembalikan respons JSON dengan error
            return response()->json(['success' => false, 'message' => 'Gagal menambahkan data: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        return view('page.kartu_keluarga.show', compact('kartuKeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KartuKeluarga $kartuKeluarga)
    {
        return view('page.kartu_keluarga.edit', compact('kartuKeluarga'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKartuKeluargaRequest $request, KartuKeluarga $kartuKeluarga)
    {
        try {
            // Menyimpan data Kartu Keluarga
            $kartuKeluarga->update(
                $request->validated()
            );

            // Kembalikan respons JSON jika berhasil
            return response()->json(['success' => true, 'message' => 'Data Kartu Keluarga berhasil diupdate.']);
        } catch (\Exception $e) {
            // Tangkap error dan kembalikan respons JSON dengan error
            return response()->json(['success' => false, 'message' => 'Gagal mengupdate data: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KartuKeluarga $kartuKeluarga)
    {
        if ($kartuKeluarga->ktp()->exists()) {
            // return redirect()->route('kartu-keluarga.index')->with('warning', 'Data Kartu Keluarga tidak dapat dihapus karena masih memiliki data KTP yang terkait.');
            return response()->json(['success' => false, 'message' => 'Data Kartu Keluarga tidak dapat dihapus karena masih memiliki data KTP yang terkait.']);
        }
        $kartuKeluarga->delete();
        // return redirect()->route('kartu-keluarga.index')->with('success', 'Data Kartu Keluarga berhasil dihapus.');
        return response()->json(['success' => true, 'message' => 'Data Kartu Keluarga berhasil dihapus']);
    }
}
