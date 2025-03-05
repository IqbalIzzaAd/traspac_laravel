<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Tambah Pegawai</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <div class="bg-white p-6 shadow-md rounded">
            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" required>
                        @error('nip') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                        @error('nama') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required>
                        @error('tempat_lahir') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        @error('alamat') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required>
                        @error('tgl_lahir') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        @error('agama') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                        @error('jabatan') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Tempat Tugas</label>
                        <input type="text" name="tempat_tugas" class="form-control" required>
                        @error('tempat_tugas') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control" required>
                        @error('golongan') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Eselon</label>
                        <input type="text" name="eselon" class="form-control">
                        @error('eselon') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Unit Kerja</label>
                        <input type="text" name="unit_kerja" class="form-control">
                        @error('unit_kerja') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>No HP</label>
                        <input type="text" name="no_hp" class="form-control">
                        @error('no_hp') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>NPWP</label>
                        <input type="text" name="npwp" class="form-control">
                        @error('npwp') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                        @error('foto') <small class="text-red-500">{{ $message }}</small> @enderror
                    </div>
                </div>
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded mt-4">Simpan</button>
            </form>
        </div>
    </div>
</x-app-layout>
