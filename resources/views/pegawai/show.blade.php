<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Detail Pegawai</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <div class="bg-white p-6 shadow-md rounded">
            <table class="w-full">
                <tr><td class="font-semibold">NIP</td><td>: {{ $pegawai->nip }}</td></tr>
                <tr><td class="font-semibold">Nama</td><td>: {{ $pegawai->nama }}</td></tr>
                <tr><td class="font-semibold">Tempat Lahir</td><td>: {{ $pegawai->tempat_lahir }}</td></tr>
                <tr><td class="font-semibold">Tanggal Lahir</td><td>: {{ \Carbon\Carbon::parse($pegawai->tgl_lahir)->format('d-m-Y') }}</td></tr>
                <tr><td class="font-semibold">Jenis Kelamin</td><td>: {{ $pegawai->jenis_kelamin }}</td></tr>
                <tr><td class="font-semibold">Alamat</td><td>: {{ $pegawai->alamat }}</td></tr>
                <tr><td class="font-semibold">Golongan</td><td>: {{ $pegawai->golongan }}</td></tr>
                <tr><td class="font-semibold">Eselon</td><td>: {{ $pegawai->eselon ?? '-' }}</td></tr>
                <tr><td class="font-semibold">Jabatan</td><td>: {{ $pegawai->jabatan }}</td></tr>
                <tr><td class="font-semibold">Tempat Tugas</td><td>: {{ $pegawai->tempat_tugas }}</td></tr>
                <tr><td class="font-semibold">Agama</td><td>: {{ $pegawai->agama }}</td></tr>
                <tr><td class="font-semibold">Unit Kerja</td><td>: {{ $pegawai->unit_kerja ?? '-' }}</td></tr>
                <tr><td class="font-semibold">No HP</td><td>: {{ $pegawai->no_hp ?? '-' }}</td></tr>
                <tr><td class="font-semibold">NPWP</td><td>: {{ $pegawai->npwp ?? '-' }}</td></tr>
                <tr>
                    <td class="font-semibold">Foto</td>
                    <td>:
                        @if($pegawai->foto)
                            <img src="{{ asset('storage/' . $pegawai->foto) }}" width="100">
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                </tr>
            </table>
            <div class="mt-4">
                <a href="{{ route('pegawai.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            </div>
        </div>
    </div>
</x-app-layout>
