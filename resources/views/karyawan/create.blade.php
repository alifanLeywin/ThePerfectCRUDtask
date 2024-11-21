@extends('layouts/app')
@section('content')
    <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Karyawan</h6>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="number" id="nip" class="form-control" name="nip" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" id="nama_karyawan" class="form-control" name="nama_karyawan" required>
                        </div>
                        <div class="form-group">
                            <label for="gaji_karyawan">Gaji Karyawan</label>
                            <input type="number" id="gaji_karyawan" class="form-control" name="gaji_karyawan" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamat" class="form-control" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                <option value="" selected disabled hidden>-- Pilih Jenis Kelamin --</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto" >Upload Foto Karyawan</label>
                            <input type="file" id="foto" class="form-control-file" name="foto" accept="image/*"
                                required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
