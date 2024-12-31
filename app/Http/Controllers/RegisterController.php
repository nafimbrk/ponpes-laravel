<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'domisili' => 'required',
            'kode_pos' => 'required',
            'status_dalam_keluarga' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'sekolah_asal' => 'required',
            'alamat_sekolah_asal' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_bulanan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_bulanan_ibu' => 'required',
            'program_pesantren' => 'required',
            'no_telp_ortu' => 'required'
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
