<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Edit Pegawai</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <div class="bg-white p-6 shadow-md rounded">
            <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{ $pegawai->nip }}" required>
                        @error('nip') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
                        @error('nama') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{ $pegawai->tempat_lahir }}" required>
                        @error('tempat_lahir') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="{{ $pegawai->tgl_lahir }}" required>
                        @error('tgl_lahir') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $pegawai->alamat }}" required>
                        @error('alamat') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" {{ $pegawai->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pegawai->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <option value="Islam" {{ $pegawai->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $pegawai->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $pegawai->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $pegawai->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $pegawai->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ $pegawai->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            <option value="Lainnya" {{ $pegawai->agama == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('agama') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                        @if($pegawai->foto)
                            <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="Foto" width="50">
                        @endif
                        @error('foto') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                </div>
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded mt-4">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</x-app-layout>
