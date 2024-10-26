{{-- @extends('layout.app')
@section('content')
    <div class="mt-2">
        <h2>Tambah Data Kartu Keluarga</h2>
        <form action="{{ route('kartu-keluarga.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="no_kartu_keluarga" class="form-label">Nomor Kartu Keluarga</label>
                <input type="number" class="form-control @error('no_kartu_keluarga') is-invalid @enderror"
                    id="no_kartu_keluarga" name="no_kartu_keluarga" value="{{ old('no_kartu_keluarga') }}" required>
                @error('no_kartu_keluarga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama_kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
                <input type="text" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror"
                    id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="{{ old('nama_kepala_keluarga') }}"
                    required>
                @error('nama_kepala_keluarga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                    name="alamat" value="{{ old('alamat') }}" required>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desa" class="form-label">Desa</label>
                <input type="text" class="form-control @error('desa') is-invalid @enderror" id="desa" name="desa"
                    value="{{ old('desa') }}" required>
                @error('desa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="rt" class="form-label">RT</label>
                    <input type="number" class="form-control @error('rt') is-invalid @enderror" id="rt"
                        name="rt" value="{{ old('rt') }}" required>
                    @error('rt')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="rw" class="form-label">RW</label>
                    <input type="number" class="form-control @error('rw') is-invalid @enderror" id="rw"
                        name="rw" value="{{ old('rw') }}" required>
                    @error('rw')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                    name="kecamatan" value="{{ old('kecamatan') }}" required>
                @error('kecamatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
                <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
                    name="kabupaten" value="{{ old('kabupaten') }}" required>
                @error('kabupaten')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="provinsi">Provinsi</label>
                <select name="provinsi" id="provinsi" class="form-control @error('provinsi') is-invalid @enderror">
                    <option value="" selected disabled>-- Pilih Provinsi --</option>
                    <option value="Aceh" {{ old('provinsi') == 'Aceh' ? 'selected' : '' }}>Aceh</option>
                    <option value="Bali" {{ old('provinsi') == 'Bali' ? 'selected' : '' }}>Bali</option>
                    <option value="Banten" {{ old('provinsi') == 'Banten' ? 'selected' : '' }}>Banten</option>
                    <option value="Bengkulu" {{ old('provinsi') == 'Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
                    <option value="DI Yogyakarta" {{ old('provinsi') == 'DI Yogyakarta' ? 'selected' : '' }}>DI Yogyakarta
                    </option>
                    <option value="DKI Jakarta" {{ old('provinsi') == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta
                    </option>
                    <option value="Gorontalo" {{ old('provinsi') == 'Gorontalo' ? 'selected' : '' }}>Gorontalo</option>
                    <option value="Jambi" {{ old('provinsi') == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                    <option value="Jawa Barat" {{ old('provinsi') == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                    <option value="Jawa Tengah" {{ old('provinsi') == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah
                    </option>
                    <option value="Jawa Timur" {{ old('provinsi') == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                    <option value="Kalimantan Barat" {{ old('provinsi') == 'Kalimantan Barat' ? 'selected' : '' }}>
                        Kalimantan Barat</option>
                    <option value="Kalimantan Selatan" {{ old('provinsi') == 'Kalimantan Selatan' ? 'selected' : '' }}>
                        Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah" {{ old('provinsi') == 'Kalimantan Tengah' ? 'selected' : '' }}>
                        Kalimantan Tengah</option>
                    <option value="Kalimantan Timur" {{ old('provinsi') == 'Kalimantan Timur' ? 'selected' : '' }}>
                        Kalimantan Timur</option>
                    <option value="Kalimantan Utara" {{ old('provinsi') == 'Kalimantan Utara' ? 'selected' : '' }}>
                        Kalimantan Utara</option>
                    <option value="Kepulauan Bangka Belitung"
                        {{ old('provinsi') == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>Kepulauan Bangka Belitung
                    </option>
                    <option value="Kepulauan Riau" {{ old('provinsi') == 'Kepulauan Riau' ? 'selected' : '' }}>Kepulauan
                        Riau</option>
                    <option value="Lampung" {{ old('provinsi') == 'Lampung' ? 'selected' : '' }}>Lampung</option>
                    <option value="Maluku" {{ old('provinsi') == 'Maluku' ? 'selected' : '' }}>Maluku</option>
                    <option value="Maluku Utara" {{ old('provinsi') == 'Maluku Utara' ? 'selected' : '' }}>Maluku Utara
                    </option>
                    <option value="Nusa Tenggara Barat" {{ old('provinsi') == 'Nusa Tenggara Barat' ? 'selected' : '' }}>
                        Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur" {{ old('provinsi') == 'Nusa Tenggara Timur' ? 'selected' : '' }}>
                        Nusa Tenggara Timur</option>
                    <option value="Papua" {{ old('provinsi') == 'Papua' ? 'selected' : '' }}>Papua</option>
                    <option value="Papua Barat" {{ old('provinsi') == 'Papua Barat' ? 'selected' : '' }}>Papua Barat
                    </option>
                    <option value="Papua Selatan" {{ old('provinsi') == 'Papua Selatan' ? 'selected' : '' }}>Papua Selatan
                    </option>
                    <option value="Papua Tengah" {{ old('provinsi') == 'Papua Tengah' ? 'selected' : '' }}>Papua Tengah
                    </option>
                    <option value="Papua Pegunungan" {{ old('provinsi') == 'Papua Pegunungan' ? 'selected' : '' }}>Papua
                        Pegunungan</option>
                    <option value="Riau" {{ old('provinsi') == 'Riau' ? 'selected' : '' }}>Riau</option>
                    <option value="Sulawesi Barat" {{ old('provinsi') == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi
                        Barat</option>
                    <option value="Sulawesi Selatan" {{ old('provinsi') == 'Sulawesi Selatan' ? 'selected' : '' }}>
                        Sulawesi Selatan</option>
                    <option value="Sulawesi Tengah" {{ old('provinsi') == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi
                        Tengah</option>
                    <option value="Sulawesi Tenggara" {{ old('provinsi') == 'Sulawesi Tenggara' ? 'selected' : '' }}>
                        Sulawesi Tenggara</option>
                    <option value="Sulawesi Utara" {{ old('provinsi') == 'Sulawesi Utara' ? 'selected' : '' }}>Sulawesi
                        Utara</option>
                    <option value="Sumatra Barat" {{ old('provinsi') == 'Sumatra Barat' ? 'selected' : '' }}>Sumatra Barat
                    </option>
                    <option value="Sumatra Selatan" {{ old('provinsi') == 'Sumatra Selatan' ? 'selected' : '' }}>Sumatra
                        Selatan</option>
                    <option value="Sumatra Utara" {{ old('provinsi') == 'Sumatra Utara' ? 'selected' : '' }}>Sumatra Utara
                    </option>
                </select>

                @error('provinsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos"
                    name="kode_pos" value="{{ old('kode_pos') }}" required>
                @error('kode_pos')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kartu-keluarga.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection --}}
<div class="py-2">
    <div class="mb-3">
        <label for="no_kartu_keluarga" class="form-label">Nomor Kartu Keluarga</label>
        <input type="number" class="form-control @error('no_kartu_keluarga') is-invalid @enderror" id="no_kartu_keluarga"
            name="no_kartu_keluarga" value="{{ old('no_kartu_keluarga') }}" required>
        @error('no_kartu_keluarga')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nama_kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
        <input type="text" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror"
            id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="{{ old('nama_kepala_keluarga') }}" required>
        @error('nama_kepala_keluarga')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
            value="{{ old('alamat') }}" required>
        @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="desa" class="form-label">Desa</label>
        <input type="text" class="form-control @error('desa') is-invalid @enderror" id="desa" name="desa"
            value="{{ old('desa') }}" required>
        @error('desa')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="rt" class="form-label">RT</label>
            <input type="number" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt"
                value="{{ old('rt') }}" required>
            @error('rt')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="rw" class="form-label">RW</label>
            <input type="number" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw"
                value="{{ old('rw') }}" required>
            @error('rw')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
            name="kecamatan" value="{{ old('kecamatan') }}" required>
        @error('kecamatan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="kabupaten" class="form-label">Kabupaten/Kota</label>
        <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
            name="kabupaten" value="{{ old('kabupaten') }}" required>
        @error('kabupaten')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="provinsi">Provinsi</label>
        <select name="provinsi" id="provinsi"
            class="form-control form-select-sm @error('provinsi') is-invalid @enderror">
            <option value="" selected disabled>-- Pilih Provinsi --</option>
            <option value="Aceh" {{ old('provinsi') == 'Aceh' ? 'selected' : '' }}>Aceh</option>
            <option value="Bali" {{ old('provinsi') == 'Bali' ? 'selected' : '' }}>Bali</option>
            <option value="Banten" {{ old('provinsi') == 'Banten' ? 'selected' : '' }}>Banten</option>
            <option value="Bengkulu" {{ old('provinsi') == 'Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
            <option value="DI Yogyakarta" {{ old('provinsi') == 'DI Yogyakarta' ? 'selected' : '' }}>DI Yogyakarta
            </option>
            <option value="DKI Jakarta" {{ old('provinsi') == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta
            </option>
            <option value="Gorontalo" {{ old('provinsi') == 'Gorontalo' ? 'selected' : '' }}>Gorontalo</option>
            <option value="Jambi" {{ old('provinsi') == 'Jambi' ? 'selected' : '' }}>Jambi</option>
            <option value="Jawa Barat" {{ old('provinsi') == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
            <option value="Jawa Tengah" {{ old('provinsi') == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah
            </option>
            <option value="Jawa Timur" {{ old('provinsi') == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
            <option value="Kalimantan Barat" {{ old('provinsi') == 'Kalimantan Barat' ? 'selected' : '' }}>
                Kalimantan Barat</option>
            <option value="Kalimantan Selatan" {{ old('provinsi') == 'Kalimantan Selatan' ? 'selected' : '' }}>
                Kalimantan Selatan</option>
            <option value="Kalimantan Tengah" {{ old('provinsi') == 'Kalimantan Tengah' ? 'selected' : '' }}>
                Kalimantan Tengah</option>
            <option value="Kalimantan Timur" {{ old('provinsi') == 'Kalimantan Timur' ? 'selected' : '' }}>
                Kalimantan Timur</option>
            <option value="Kalimantan Utara" {{ old('provinsi') == 'Kalimantan Utara' ? 'selected' : '' }}>
                Kalimantan Utara</option>
            <option value="Kepulauan Bangka Belitung"
                {{ old('provinsi') == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>Kepulauan Bangka Belitung
            </option>
            <option value="Kepulauan Riau" {{ old('provinsi') == 'Kepulauan Riau' ? 'selected' : '' }}>Kepulauan
                Riau</option>
            <option value="Lampung" {{ old('provinsi') == 'Lampung' ? 'selected' : '' }}>Lampung</option>
            <option value="Maluku" {{ old('provinsi') == 'Maluku' ? 'selected' : '' }}>Maluku</option>
            <option value="Maluku Utara" {{ old('provinsi') == 'Maluku Utara' ? 'selected' : '' }}>Maluku Utara
            </option>
            <option value="Nusa Tenggara Barat" {{ old('provinsi') == 'Nusa Tenggara Barat' ? 'selected' : '' }}>
                Nusa Tenggara Barat</option>
            <option value="Nusa Tenggara Timur" {{ old('provinsi') == 'Nusa Tenggara Timur' ? 'selected' : '' }}>
                Nusa Tenggara Timur</option>
            <option value="Papua" {{ old('provinsi') == 'Papua' ? 'selected' : '' }}>Papua</option>
            <option value="Papua Barat" {{ old('provinsi') == 'Papua Barat' ? 'selected' : '' }}>Papua Barat
            </option>
            <option value="Papua Selatan" {{ old('provinsi') == 'Papua Selatan' ? 'selected' : '' }}>Papua Selatan
            </option>
            <option value="Papua Tengah" {{ old('provinsi') == 'Papua Tengah' ? 'selected' : '' }}>Papua Tengah
            </option>
            <option value="Papua Pegunungan" {{ old('provinsi') == 'Papua Pegunungan' ? 'selected' : '' }}>Papua
                Pegunungan</option>
            <option value="Riau" {{ old('provinsi') == 'Riau' ? 'selected' : '' }}>Riau</option>
            <option value="Sulawesi Barat" {{ old('provinsi') == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi
                Barat</option>
            <option value="Sulawesi Selatan" {{ old('provinsi') == 'Sulawesi Selatan' ? 'selected' : '' }}>
                Sulawesi Selatan</option>
            <option value="Sulawesi Tengah" {{ old('provinsi') == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi
                Tengah</option>
            <option value="Sulawesi Tenggara" {{ old('provinsi') == 'Sulawesi Tenggara' ? 'selected' : '' }}>
                Sulawesi Tenggara</option>
            <option value="Sulawesi Utara" {{ old('provinsi') == 'Sulawesi Utara' ? 'selected' : '' }}>Sulawesi
                Utara</option>
            <option value="Sumatra Barat" {{ old('provinsi') == 'Sumatra Barat' ? 'selected' : '' }}>Sumatra Barat
            </option>
            <option value="Sumatra Selatan" {{ old('provinsi') == 'Sumatra Selatan' ? 'selected' : '' }}>Sumatra
                Selatan</option>
            <option value="Sumatra Utara" {{ old('provinsi') == 'Sumatra Utara' ? 'selected' : '' }}>Sumatra Utara
            </option>
        </select>

        @error('provinsi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="kode_pos" class="form-label">Kode Pos</label>
        <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" id="kode_pos"
            name="kode_pos" value="{{ old('kode_pos') }}" required>
        @error('kode_pos')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="">
        <button type="button" class="btn btn-primary" onclick="store()">Save</button>
    </div>
</div>
