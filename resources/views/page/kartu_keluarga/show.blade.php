<div class="mt-2">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <p class="card-text"><strong>Nomor Kartu Keluarga</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->no_kartu_keluarga }}</p>
                </div>
                <div class="col-md-4">
                    <p class="card-text"><strong>Nama Kepala Keluarga</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->nama_kepala_keluarga }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Alamat</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->alamat }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Desa</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->desa }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>RT</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->rt }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>RW</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->rw }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Kecamatan</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->kecamatan }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Kabupaten</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->kabupaten }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Provinsi</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->provinsi }}</p>
                </div>

                <div class="col-md-4">
                    <p class="card-text"><strong>Kode Pos</strong></p>
                </div>
                <div class="col-md-8">
                    <p class="card-text">: {{ $kartuKeluarga->kode_pos }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <h5>Daftar NIK KTP pada Kartu Keluarga</h5>
            <ul>
                @forelse ($kartuKeluarga->ktp as $ktp)
                    <li>{{ $ktp->NIK }} - {{ $ktp->nama_lengkap }}</li>
                @empty
                    <li>Tidak ada data KTP terkait.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
