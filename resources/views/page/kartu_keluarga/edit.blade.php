{{-- @extends('layout.app')
@section('content')
    <div class="mt-2">
        <h2>Edit Data Kartu Keluarga</h2>
        <form action="{{ route('kartu-keluarga.update', $kartuKeluarga->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan method PUT untuk update data -->

            <div class="mb-3">
                <label for="no_kartu_keluarga" class="form-label">Nomor Kartu Keluarga</label>
                <input type="number" class="form-control" id="no_kartu_keluarga" name="no_kartu_keluarga"
                    value="{{ old('no_kartu_keluarga', $kartuKeluarga->no_kartu_keluarga) }}" required>
            </div>

            <div class="mb-3">
                <label for="nama_kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
                <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga"
                    value="{{ old('nama_kepala_keluarga', $kartuKeluarga->nama_kepala_keluarga) }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"
                    value="{{ old('alamat', $kartuKeluarga->alamat) }}" required>
            </div>

            <div class="mb-3">
                <label for="desa" class="form-label">Desa</label>
                <input type="text" class="form-control" id="desa" name="desa"
                    value="{{ old('desa', $kartuKeluarga->desa) }}" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="rt" class="form-label">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt"
                        value="{{ old('rt', $kartuKeluarga->rt) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="rw" class="form-label">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw"
                        value="{{ old('rw', $kartuKeluarga->rw) }}" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="{{ old('kecamatan', $kartuKeluarga->kecamatan) }}" required>
            </div>

            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                    value="{{ old('kabupaten', $kartuKeluarga->kabupaten) }}" required>
            </div>

            <div class="mb-3">
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-control @error('provinsi') is-invalid @enderror"
                        required>
                        <option value="" disabled>-- Pilih Provinsi --</option>
                        <option value="Aceh" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Aceh' ? 'selected' : '' }}>
                            Aceh</option>
                        <option value="Bali" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Bali' ? 'selected' : '' }}>
                            Bali</option>
                        <option value="Banten"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Banten' ? 'selected' : '' }}>Banten</option>
                        <option value="Bengkulu"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Bengkulu' ? 'selected' : '' }}>Bengkulu
                        </option>
                        <option value="DI Yogyakarta"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'DI Yogyakarta' ? 'selected' : '' }}>DI
                            Yogyakarta</option>
                        <option value="DKI Jakarta"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta
                        </option>
                        <option value="Gorontalo"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Gorontalo' ? 'selected' : '' }}>Gorontalo
                        </option>
                        <option value="Jambi"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                        <option value="Jawa Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat
                        </option>
                        <option value="Jawa Tengah"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah
                        </option>
                        <option value="Jawa Timur"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur
                        </option>
                        <option value="Kalimantan Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Barat' ? 'selected' : '' }}>
                            Kalimantan Barat</option>
                        <option value="Kalimantan Selatan"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Selatan' ? 'selected' : '' }}>
                            Kalimantan Selatan</option>
                        <option value="Kalimantan Tengah"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Tengah' ? 'selected' : '' }}>
                            Kalimantan Tengah</option>
                        <option value="Kalimantan Timur"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Timur' ? 'selected' : '' }}>
                            Kalimantan Timur</option>
                        <option value="Kalimantan Utara"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Utara' ? 'selected' : '' }}>
                            Kalimantan Utara</option>
                        <option value="Kepulauan Bangka Belitung"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>
                            Kepulauan Bangka Belitung</option>
                        <option value="Kepulauan Riau"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kepulauan Riau' ? 'selected' : '' }}>Kepulauan
                            Riau</option>
                        <option value="Lampung"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Lampung' ? 'selected' : '' }}>Lampung</option>
                        <option value="Maluku"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Maluku' ? 'selected' : '' }}>Maluku</option>
                        <option value="Maluku Utara"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Maluku Utara' ? 'selected' : '' }}>Maluku
                            Utara</option>
                        <option value="Nusa Tenggara Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Nusa Tenggara Barat' ? 'selected' : '' }}>Nusa
                            Tenggara Barat</option>
                        <option value="Nusa Tenggara Timur"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Nusa Tenggara Timur' ? 'selected' : '' }}>Nusa
                            Tenggara Timur</option>
                        <option value="Papua"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua' ? 'selected' : '' }}>Papua</option>
                        <option value="Papua Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Barat' ? 'selected' : '' }}>Papua Barat
                        </option>
                        <option value="Papua Selatan"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Selatan' ? 'selected' : '' }}>Papua
                            Selatan</option>
                        <option value="Papua Tengah"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Tengah' ? 'selected' : '' }}>Papua
                            Tengah</option>
                        <option value="Papua Pegunungan"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Pegunungan' ? 'selected' : '' }}>Papua
                            Pegunungan</option>
                        <option value="Riau"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Riau' ? 'selected' : '' }}>Riau</option>
                        <option value="Sulawesi Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi
                            Barat</option>
                        <option value="Sulawesi Selatan"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Selatan' ? 'selected' : '' }}>
                            Sulawesi Selatan</option>
                        <option value="Sulawesi Tengah"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi
                            Tengah</option>
                        <option value="Sulawesi Tenggara"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Tenggara' ? 'selected' : '' }}>
                            Sulawesi Tenggara</option>
                        <option value="Sulawesi Utara"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Utara' ? 'selected' : '' }}>Sulawesi
                            Utara</option>
                        <option value="Sumatra Barat"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Barat' ? 'selected' : '' }}>Sumatra
                            Barat</option>
                        <option value="Sumatra Selatan"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Selatan' ? 'selected' : '' }}>Sumatra
                            Selatan</option>
                        <option value="Sumatra Utara"
                            {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Utara' ? 'selected' : '' }}>Sumatra
                            Utara</option>
                    </select>
                </div>

            </div>

            <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                    value="{{ old('kode_pos', $kartuKeluarga->kode_pos) }}" required>
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Update Data</button>
                <a href="{{ route('kartu-keluarga.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection --}}

<div class="py-2">
    <div class="mb-3">
        <label for="no_kartu_keluarga" class="form-label">Nomor Kartu Keluarga</label>
        <input type="number" class="form-control" id="no_kartu_keluarga" name="no_kartu_keluarga"
            value="{{ old('no_kartu_keluarga', $kartuKeluarga->no_kartu_keluarga) }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_kepala_keluarga" class="form-label">Nama Kepala Keluarga</label>
        <input type="text" class="form-control" id="nama_kepala_keluarga" name="nama_kepala_keluarga"
            value="{{ old('nama_kepala_keluarga', $kartuKeluarga->nama_kepala_keluarga) }}" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat"
            value="{{ old('alamat', $kartuKeluarga->alamat) }}" required>
    </div>

    <div class="mb-3">
        <label for="desa" class="form-label">Desa</label>
        <input type="text" class="form-control" id="desa" name="desa"
            value="{{ old('desa', $kartuKeluarga->desa) }}" required>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="rt" class="form-label">RT</label>
            <input type="number" class="form-control" id="rt" name="rt"
                value="{{ old('rt', $kartuKeluarga->rt) }}" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="rw" class="form-label">RW</label>
            <input type="number" class="form-control" id="rw" name="rw"
                value="{{ old('rw', $kartuKeluarga->rw) }}" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan"
            value="{{ old('kecamatan', $kartuKeluarga->kecamatan) }}" required>
    </div>

    <div class="mb-3">
        <label for="kabupaten" class="form-label">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" name="kabupaten"
            value="{{ old('kabupaten', $kartuKeluarga->kabupaten) }}" required>
    </div>

    <div class="mb-3">
        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control @error('provinsi') is-invalid @enderror"
                required>
                <option value="" disabled>-- Pilih Provinsi --</option>
                <option value="Aceh" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Aceh' ? 'selected' : '' }}>
                    Aceh</option>
                <option value="Bali" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Bali' ? 'selected' : '' }}>
                    Bali</option>
                <option value="Banten" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Banten' ? 'selected' : '' }}>
                    Banten</option>
                <option value="Bengkulu"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Bengkulu' ? 'selected' : '' }}>Bengkulu
                </option>
                <option value="DI Yogyakarta"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'DI Yogyakarta' ? 'selected' : '' }}>DI
                    Yogyakarta</option>
                <option value="DKI Jakarta"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta
                </option>
                <option value="Gorontalo"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Gorontalo' ? 'selected' : '' }}>Gorontalo
                </option>
                <option value="Jambi" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jambi' ? 'selected' : '' }}>
                    Jambi</option>
                <option value="Jawa Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat
                </option>
                <option value="Jawa Tengah"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah
                </option>
                <option value="Jawa Timur"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur
                </option>
                <option value="Kalimantan Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Barat' ? 'selected' : '' }}>
                    Kalimantan Barat</option>
                <option value="Kalimantan Selatan"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Selatan' ? 'selected' : '' }}>
                    Kalimantan Selatan</option>
                <option value="Kalimantan Tengah"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Tengah' ? 'selected' : '' }}>
                    Kalimantan Tengah</option>
                <option value="Kalimantan Timur"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Timur' ? 'selected' : '' }}>
                    Kalimantan Timur</option>
                <option value="Kalimantan Utara"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kalimantan Utara' ? 'selected' : '' }}>
                    Kalimantan Utara</option>
                <option value="Kepulauan Bangka Belitung"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kepulauan Bangka Belitung' ? 'selected' : '' }}>
                    Kepulauan Bangka Belitung</option>
                <option value="Kepulauan Riau"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Kepulauan Riau' ? 'selected' : '' }}>Kepulauan
                    Riau</option>
                <option value="Lampung" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Lampung' ? 'selected' : '' }}>
                    Lampung</option>
                <option value="Maluku" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Maluku' ? 'selected' : '' }}>
                    Maluku</option>
                <option value="Maluku Utara"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Maluku Utara' ? 'selected' : '' }}>Maluku
                    Utara</option>
                <option value="Nusa Tenggara Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Nusa Tenggara Barat' ? 'selected' : '' }}>Nusa
                    Tenggara Barat</option>
                <option value="Nusa Tenggara Timur"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Nusa Tenggara Timur' ? 'selected' : '' }}>Nusa
                    Tenggara Timur</option>
                <option value="Papua" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua' ? 'selected' : '' }}>
                    Papua</option>
                <option value="Papua Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Barat' ? 'selected' : '' }}>Papua Barat
                </option>
                <option value="Papua Selatan"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Selatan' ? 'selected' : '' }}>Papua
                    Selatan</option>
                <option value="Papua Tengah"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Tengah' ? 'selected' : '' }}>Papua
                    Tengah</option>
                <option value="Papua Pegunungan"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Papua Pegunungan' ? 'selected' : '' }}>Papua
                    Pegunungan</option>
                <option value="Riau" {{ old('provinsi', $kartuKeluarga->provinsi) == 'Riau' ? 'selected' : '' }}>
                    Riau</option>
                <option value="Sulawesi Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi
                    Barat</option>
                <option value="Sulawesi Selatan"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Selatan' ? 'selected' : '' }}>
                    Sulawesi Selatan</option>
                <option value="Sulawesi Tengah"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi
                    Tengah</option>
                <option value="Sulawesi Tenggara"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Tenggara' ? 'selected' : '' }}>
                    Sulawesi Tenggara</option>
                <option value="Sulawesi Utara"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sulawesi Utara' ? 'selected' : '' }}>Sulawesi
                    Utara</option>
                <option value="Sumatra Barat"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Barat' ? 'selected' : '' }}>Sumatra
                    Barat</option>
                <option value="Sumatra Selatan"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Selatan' ? 'selected' : '' }}>Sumatra
                    Selatan</option>
                <option value="Sumatra Utara"
                    {{ old('provinsi', $kartuKeluarga->provinsi) == 'Sumatra Utara' ? 'selected' : '' }}>Sumatra
                    Utara</option>
            </select>
        </div>

    </div>

    <div class="mb-3">
        <label for="kode_pos" class="form-label">Kode Pos</label>
        <input type="text" class="form-control" id="kode_pos" name="kode_pos"
            value="{{ old('kode_pos', $kartuKeluarga->kode_pos) }}" required>
    </div>

    <a onclick="update({{ $kartuKeluarga->id }})" class="btn btn-primary">Update</a>

</div>
