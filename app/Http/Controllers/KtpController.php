<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Http\Requests\StoreKtpRequest;
use App\Http\Requests\UpdateKtpRequest;
use App\Models\KartuKeluarga;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Ktp::all();

        return view('page.ktp.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function fetchData()
    {
        $data = Ktp::orderBy('id', 'desc')->get();
        return view('page.ktp.table')->with([
            'data' => $data
        ]);
    }
    public function create()
    {
        $kartuKeluarga = KartuKeluarga::all();
        return view('page.ktp.create', compact('kartuKeluarga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKtpRequest $request)
    {
        $data = $request->validated();
        $data['no_paspor'] = empty($data['no_paspor']) ? '-' : $data['no_paspor'];
        $data['no_kitas'] = empty($data['no_kitas']) ? '-' : $data['no_kitas'];
        Ktp::create($data);

        // return redirect()->route('ktp.index')->with('success', 'Data KTP berhasil disimpan.');
        return response()->json([
            'success' => true, 'message' => 'Data Kartu Keluarga berhasil ditambahkan.'
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Ktp $ktp)
    {
        return view('page.ktp.show', compact('ktp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ktp $ktp)
    {
        $kartuKeluarga = KartuKeluarga::all();
        return view('page.ktp.edit', compact('ktp', 'kartuKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKtpRequest $request, Ktp $ktp)
    {
        $ktp->update($request->validated());
        // return redirect()->route('ktp.index')->with('success', 'Data KTP berhasil diperbarui.');
        return response()->json([
            'success' => true,
            'message' => 'Berhasil update data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ktp $ktp)
    {
        $ktp->delete();
        // return redirect()->route('ktp.index')->with('success', 'Data KTP berhasil dihapus.');
        return response()->json([
            'success' => true,
            'message' => 'Berhasil hapus data'
        ]);
    }
}
