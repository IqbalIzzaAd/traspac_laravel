<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{

    protected $table = 'pegawai';
    protected $fillable = [
        'nip', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin',
        'agama', 'jabatan', 'tempat_tugas', 'golongan', 'eselon', 'unit_kerja',
        'no_hp', 'npwp', 'alamat', 'foto'
    ];
}
