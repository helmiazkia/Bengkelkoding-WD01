<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;

class PeriksaController extends Controller
{
    public function index()
    {
        return Periksa::with(['pasien', 'dokter', 'detailPeriksas.obat'])->get();
    }
}
