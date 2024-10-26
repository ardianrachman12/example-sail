@extends('layout.app')
@section('content')
    <div class="">
        <div class="py-3">
            {{-- <a href="{{ route('kartu-keluarga.create') }}"> --}}
            <button class="btn btn-success" onclick="create()">Tambah Data</button>
            {{-- </a> --}}
        </div>
        <div class="card p-4 mb-4">
            <div id="table">
            </div>
        </div>
    </div>

    <!-- Modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            fetchData();
        });

        function fetchData() {
            $.get('{{ route('kartu-keluarga.fetchData') }}', function(data) {
                $('#table').html(data);
                $('#myTable').DataTable();
            });
        }

        function create() {
            $.get('{{ route('kartu-keluarga.create') }}', function(data) {
                $('#exampleModalLabel').html('Tambah Kartu Keluarga');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }

        function store() {
            var no_kartu_keluarga = $('#no_kartu_keluarga').val();
            var nama_kepala_keluarga = $('#nama_kepala_keluarga').val();
            var alamat = $('#alamat').val();
            var desa = $('#desa').val();
            var rt = $('#rt').val();
            var rw = $('#rw').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var provinsi = $('#provinsi').val();
            var kode_pos = $('#kode_pos').val();

            $.ajax({
                url: "{{ route('kartu-keluarga.store') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_kartu_keluarga: no_kartu_keluarga,
                    nama_kepala_keluarga: nama_kepala_keluarga,
                    alamat: alamat,
                    desa: desa,
                    rt: rt,
                    rw: rw,
                    kabupaten: kabupaten,
                    kecamatan: kecamatan,
                    provinsi: provinsi,
                    kode_pos: kode_pos
                },
                success: function(response) {
                    if (response.success) {
                        // Menampilkan alert sukses
                        $('#alert-container').html(`
                    <div class="alert alert-success fade show" role="alert">
                        ${response.message}
                    </div>
                `);
                        $('#close').click(); // Tutup modal setelah berhasil menyimpan data
                        fetchData(); // Panggil fungsi untuk mengambil data terbaru
                    }
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        alert(value[0]); // Menampilkan pesan error
                    });
                }
            });
        }

        function edit(id) {
            var url = '/kartu-keluarga/' + id + '/edit';
            $.get(url, function(data) {
                $('#exampleModalLabel').html('Edit Kartu Keluarga');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }

        function update(id) {
            var no_kartu_keluarga = $('#no_kartu_keluarga').val();
            var nama_kepala_keluarga = $('#nama_kepala_keluarga').val();
            var alamat = $('#alamat').val();
            var desa = $('#desa').val();
            var rt = $('#rt').val();
            var rw = $('#rw').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var provinsi = $('#provinsi').val();
            var kode_pos = $('#kode_pos').val();

            // Gunakan route resource untuk update
            var url = '{{ route('kartu-keluarga.update', ':id') }}';
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                method: 'PUT',
                data: {
                    _token: "{{ csrf_token() }}",
                    no_kartu_keluarga: no_kartu_keluarga,
                    nama_kepala_keluarga: nama_kepala_keluarga,
                    alamat: alamat,
                    desa: desa,
                    rt: rt,
                    rw: rw,
                    kabupaten: kabupaten,
                    kecamatan: kecamatan,
                    provinsi: provinsi,
                    kode_pos: kode_pos
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        $('#close').click(); // Tutup modal setelah berhasil menyimpan data
                        fetchData(); // Panggil fungsi untuk mengambil data terbaru
                    }
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        alert(value[0]); // Menampilkan pesan error
                    });
                }
            });
        }

        function deleteData(id) {
            var url = '{{ route('kartu-keluarga.destroy', ':id') }}';
            url = url.replace(':id', id);

            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            fetchData(); // Panggil fungsi untuk mengambil data terbaru setelah penghapusan
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            alert(value[0]); // Menampilkan pesan error
                        });
                    }
                });
            }
        }

        function showDetail(id){
            var url = '{{route('kartu-keluarga.show', ':id')}}';
            url = url.replace(':id', id);
                $.get(url, function(data) {
                $('#exampleModalLabel').html('Detail Kartu Keluarga');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }
    </script>
@endpush
