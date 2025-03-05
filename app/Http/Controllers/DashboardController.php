<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai; // <- Tambahkan spasi setelah "use"

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::paginate(10); // Ambil data pegawai dengan pagination
        return view('dashboard', compact('pegawai'));
    }
}
