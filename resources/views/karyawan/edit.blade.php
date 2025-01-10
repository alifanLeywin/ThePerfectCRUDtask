@extends('layouts/app')
@section('content')
    {{-- Menampilkan error jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form edit karyawan --}}
    <form action="{{ url('karyawan/' . $data->nip) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6>Formulir Edit Karyawan</h6>
                    </div>
                    <div class="card-body">
                        {{-- Field NIP (readonly jika tidak boleh diubah) --}}
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{ old('nip', $data->nip) }}" readonly>
                        </div>

                        {{-- Nama Karyawan --}}
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" class="form-control" name="nama_karyawan" value="{{ old('nama_karyawan', $data->nama_karyawan) }}">
                        </div>

                        {{-- Gaji Karyawan --}}
                        <div class="form-group">
                            <label for="gaji_karyawan">Gaji Karyawan</label>
                            <input type="number" class="form-control" name="gaji_karyawan" value="{{ old('gaji_karyawan', $data->gaji_karyawan) }}">
                        </div>                           

                        {{-- Alamat --}}
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat">{{ old('alamat', $data->alamat) }}</textarea>
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option value="" disabled hidden>--Pilih Jenis Kelamin--</option>
                                <option value="Pria" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Pria' ? 'selected' : '' }}>Pria</option>
                                <option value="Wanita" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                            </select>
                        </div>

                                                <div class="form-group">
                            <label for="departemen_id">Departemen</label>
                            <select name="departemen_id" class="form-control">
                                @foreach ($departemen as $item)
                                    <option value="{{ $item->id }}" {{ old('departemen_id', $data->departemen_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_departemen }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        



                      @if($data->foto)
                      <div class="form-group">
                      <img style="max: width 100px; max-height:100px"  src="{{url('foto').'/'.$data->foto}}">
                      </div>
                    @endif
                    <div class="form-group">
                            <label for="foto" >Upload Foto Karyawan</label>
                            <input type="file" id="foto" class="form-control-file" name="foto">
                        </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
