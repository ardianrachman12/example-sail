<div class="py-2">
    <div class="mb-3">
        <label for="kartu_keluarga_id" class="form-label">Kartu Keluarga</label>
        <select class="form-control @error('kartu_keluarga_id') is-invalid @enderror" id="kartu_keluarga_id"
            name="kartu_keluarga_id" required>
            <option value="" selected disabled>Pilih Kartu Keluarga</option>
            @foreach ($kartuKeluarga as $item)
                <option value="{{ $item->id }}">{{ $item->no_kartu_keluarga }}</option>
            @endforeach
        </select>
        @error('kartu_keluarga_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="NIK" class="form-label">NIK</label>
        <input type="number" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK"
            required>
        @error('NIK')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap"
            name="nama_lengkap" required>
        @error('nama_lengkap')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
            name="tempat_lahir" required>
        @error('tempat_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
            name="tanggal_lahir" required>
        @error('tanggal_lahir')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin"
            required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        @error('jenis_kelamin')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="agama" class="form-label">Agama</label>
        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama"
            required>
        @error('agama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="pendidikan" class="form-label">Pendidikan</label>
        <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan"
            name="pendidikan" required>
        @error('pendidikan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="pekerjaan" class="form-label">Pekerjaan</label>
        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan"
            name="pekerjaan" required>
        @error('pekerjaan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
        <select class="form-select @error('status_pernikahan') is-invalid @enderror" id="status_pernikahan"
            name="status_pernikahan" required>
            <option value="">Pilih Status Pernikahan</option>
            <option value="kawin">Kawin</option>
            <option value="belum-kawin">Belum Kawin</option>
            <option value="cerai-hidup">Cerai Hidup</option>
            <option value="cerai-mati">Cerai Mati</option>
        </select>
        @error('status_pernikahan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="hubungan_keluarga" class="form-label">Hubungan Keluarga</label>
        <input type="text" class="form-control @error('hubungan_keluarga') is-invalid @enderror"
            id="hubungan_keluarga" name="hubungan_keluarga" required>
        @error('hubungan_keluarga')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
        <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" id="kewarganegaraan"
            name="kewarganegaraan" required>
        @error('kewarganegaraan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="no_paspor" class="form-label">No Paspor</label>
        <input type="text" class="form-control @error('no_paspor') is-invalid @enderror" id="no_paspor"
            name="no_paspor">
        @error('no_paspor')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="no_kitas" class="form-label">No KITAS</label>
        <input type="text" class="form-control @error('no_kitas') is-invalid @enderror" id="no_kitas"
            name="no_kitas">
        @error('no_kitas')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nama_ayah" class="form-label">Nama Ayah</label>
        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
            name="nama_ayah" required>
        @error('nama_ayah')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nama_ibu" class="form-label">Nama Ibu</label>
        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
            name="nama_ibu" required>
        @error('nama_ibu')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button onclick="store()" class="btn btn-primary">Save</button>
</div>
