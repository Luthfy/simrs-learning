<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Patient;

class PasienController extends Controller
{
    /**
     * index = menampilkan data pasien
     */
    public function index()
    {
        // list data pasien
        $patients = Patient::all();

        // tampilkan data pasien
        return view('patient.index', [
            'title' => 'Daftar Pasien',
            'patients' => $patients
        ]);
    }

    /**
     * create = menampilkan form insert pasien
     */
    public function create()
    {
        // menampilkan form pasien
        return view('patient.create', [
            'title' => 'Form Tambah Pasien'
        ]);
    }

    public function store(Request $request)
    {
        // validasi data masuk
        $request->validate([
            'name' =>'required',
            'record_number' =>'required',
            'phone_number' =>'required'
        ]);

        // insert data pasien
        Patient::create([
            'uuid' => Str::uuid(),
            'name' => $request->name,
            'record_number' => $request->record_number,
            'phone_number' => $request->phone_number
        ]);

        // kembali ke halaman index
        return redirect('pasien');
    }
}
