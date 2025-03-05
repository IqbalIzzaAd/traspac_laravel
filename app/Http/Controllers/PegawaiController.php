<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Menampilkan daftar pegawai.
     */
    public function index()
    {
        $pegawai = Pegawai::paginate(10);
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Menampilkan form tambah data pegawai.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Menampilkan detail pegawai.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Menyimpan data pegawai baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:pegawai',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string',
            'alamat' => 'nullable|string',
            'tgl_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'golongan' => 'nullable|string',
            'eselon' => 'nullable|string',
            'jabatan' => 'nullable|string',
            'tempat_tugas' => 'nullable|string',
            'agama' => 'nullable|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Lainnya',
            'unit_kerja' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'npwp' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_pegawai', 'public');
        }

        Pegawai::create($validated);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data pegawai.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Mengupdate data pegawai.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:pegawai,nip,' . ($pegawai->id ?? 'NULL'),
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'nullable|string',
            'alamat' => 'nullable|string',
            'tgl_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'golongan' => 'nullable|string',
            'eselon' => 'nullable|string',
            'jabatan' => 'nullable|string',
            'tempat_tugas' => 'nullable|string',
            'agama' => 'nullable|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Lainnya',
            'unit_kerja' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'npwp' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pegawai->foto) {
                Storage::disk('public')->delete($pegawai->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request->file('foto')->store('foto_pegawai', 'public');
        }

        $pegawai->update($validated);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui.');
    }

    /**
     * Menghapus data pegawai.
     */
    public function destroy(Pegawai $pegawai)
    {
        // Hapus foto jika ada
        if ($pegawai->foto && Storage::disk('public')->exists($pegawai->foto)) {
            Storage::disk('public')->delete($pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
