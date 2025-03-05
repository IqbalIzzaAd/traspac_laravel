<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Daftar Pegawai</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="w-full border-collapse border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">NIP</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Tempat Lahir</th>
                        <th class="border px-4 py-2">Alamat</th>
                        <th class="border px-4 py-2">Tgl Lahir</th>
                        <th class="border px-4 py-2">L/P</th>
                        <th class="border px-4 py-2">Gol</th>
                        <th class="border px-4 py-2">Eselon</th>
                        <th class="border px-4 py-2">Jabatan</th>
                        <th class="border px-4 py-2">Tempat Tugas</th>
                        <th class="border px-4 py-2">Agama</th>
                        <th class="border px-4 py-2">Unit Kerja</th>
                        <th class="border px-4 py-2">No HP</th>
                        <th class="border px-4 py-2">NPWP</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $index => $p)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="border px-4 py-2">{{ $index + 1 }}</td>
                            <td class="border px-4 py-2">{{ $p->nip }}</td>
                            <td class="border px-4 py-2">{{ $p->nama }}</td>
                            <td class="border px-4 py-2">{{ $p->tempat_lahir }}</td>
                            <td class="border px-4 py-2">{{ $p->alamat }}</td>
                            <td class="border px-4 py-2">{{ $p->tgl_lahir }}</td>
                            <td class="border px-4 py-2">{{ $p->jenis_kelamin }}</td>
                            <td class="border px-4 py-2">{{ $p->golongan }}</td>
                            <td class="border px-4 py-2">{{ $p->eselon }}</td>
                            <td class="border px-4 py-2">{{ $p->jabatan }}</td>
                            <td class="border px-4 py-2">{{ $p->tempat_tugas }}</td>
                            <td class="border px-4 py-2">{{ $p->agama }}</td>
                            <td class="border px-4 py-2">{{ $p->unit_kerja }}</td>
                            <td class="border px-4 py-2">{{ $p->no_hp }}</td>
                            <td class="border px-4 py-2">{{ $p->npwp }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center space-x-1">
                                    <a href="{{ route('pegawai.show', $p->id) }}" class="bg-green-500 text-white px-2 py-1 rounded text-xs shadow">Lihat</a>
                                   
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $pegawai->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
