<?php

namespace App\Http\Controllers;

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
}
