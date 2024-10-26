<div class="py-2">
    <div class="mb-3">
        <label for="kartu_keluarga_id" class="form-label">Kartu Keluarga</label>
        <select class="form-control" id="kartu_keluarga_id" name="kartu_keluarga_id" required>
            @foreach ($kartuKeluarga as $item)
                <option value="{{ $item->id }}" {{ $item->id == $ktp->kartu_keluarga_id ? 'selected' : '' }}>
                    {{ $item->no_kartu_keluarga }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="NIK" class="form-label">NIK</label>
        <input type="number" class="form-control" id="NIK" name="NIK" value="{{ $ktp->NIK }}" required>
    </div>

    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
            value="{{ $ktp->nama_lengkap }}" required>
    </div>

    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
            value="{{ $ktp->tempat_lahir }}" required>
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
            value="{{ $ktp->tanggal_lahir }}" required>
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="L" {{ $ktp->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $ktp->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <input type="text" class="form-control" id="agama" name="agama" value="{{ $ktp->agama }}" required>
    </div>

    <div class="mb-3">
        <label for="pendidikan" class="form-label">Pendidikan</label>
        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $ktp->pendidikan }}"
            required>
    </div>

    <div class="mb-3">
        <label for="pekerjaan" class="form-label">Pekerjaan</label>
        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $ktp->pekerjaan }}"
            required>
    </div>

    <div class="mb-3">
        <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
        <select class="form-select" id="status_pernikahan" name="status_pernikahan" required>
            <option value="kawin" {{ $ktp->status_pernikahan == 'kawin' ? 'selected' : '' }}>Kawin</option>
            <option value="belum-kawin" {{ $ktp->status_pernikahan == 'belum-kawin' ? 'selected' : '' }}>Belum
                Kawin</option>
            <option value="cerai-hidup" {{ $ktp->status_pernikahan == 'cerai-hidup' ? 'selected' : '' }}>Cerai
                Hidup</option>
            <option value="cerai-mati" {{ $ktp->status_pernikahan == 'cerai-mati' ? 'selected' : '' }}>Cerai Mati
            </option>
        </select>
    </div>

    <div class="mb-3">
        <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
        <input type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga"
            value="{{ $ktp->hubungan_keluarga }}" required>
    </div>

    <div class="mb-3">
        <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan"
            value="{{ $ktp->kewarganegaraan }}" required>
    </div>

    <div class="mb-3">
        <label for="no_paspor" class="form-label">No Paspor</label>
        <input type="text" class="form-control" id="no_paspor" name="no_paspor" value="{{ $ktp->no_paspor }}">
    </div>

    <div class="mb-3">
        <label for="no_kitas" class="form-label">No KITAS</label>
        <input type="text" class="form-control" id="no_kitas" name="no_kitas" value="{{ $ktp->no_kitas }}">
    </div>

    <div class="mb-3">
        <label for="nama_ayah" class="form-label">Nama Ayah</label>
        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $ktp->nama_ayah }}"
            required>
    </div>

    <div class="mb-3">
        <label for="nama_ibu" class="form-label">Nama Ibu</label>
        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $ktp->nama_ibu }}"
            required>
    </div>

    <button onclick="update({{$ktp->id}})" class="btn btn-primary">Update</button>
</div>
