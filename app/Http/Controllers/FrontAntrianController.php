<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;

class FrontAntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('antrian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('antrian.create'); // Pastikan file view ada di resources/views/antrian/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_antrian' => 'required|integer|unique:antrians,nomor_antrian',
        ]);

        Antrian::create($validatedData);

        return redirect()->route('antrian.index')->with('success', 'Antrian berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Antrian $antrian)
    {
        return view('antrian.show', compact('antrian')); // Pastikan file view ada di resources/views/antrian/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Antrian $antrian)
    {
        return view('antrian.edit', compact('antrian')); // Pastikan file view ada di resources/views/antrian/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Antrian $antrian)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_antrian' => 'required|integer|unique:antrians,nomor_antrian,' . $antrian->id,
        ]);

        $antrian->update($validatedData);

        return redirect()->route('antrian.index')->with('success', 'Antrian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Antrian $antrian)
    {
        $antrian->delete();

        return redirect()->route('antrian.index')->with('success', 'Antrian berhasil dihapus.');
    }

    /**
     * Generate PDF for user's antrian.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetakAntrian()
    {
        $user = Auth::user();
        $detailAntrian = Antrian::where('user_id', $user->id)->get();

        $pdf = PDF::loadview('livewire.antrian.cetakAntrian', [
            'detailAntrian' => $detailAntrian
        ]);
        return $pdf->stream('antrian.pdf');
    }
}
