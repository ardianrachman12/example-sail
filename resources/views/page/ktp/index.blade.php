@extends('layout.app')
@section('content')
    <div>
        <div class="py-3">
            <button class="btn btn-success" onclick="create()">Tambah Data</button>
        </div>
        <div class="p-4 card" id="table">
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
            $.get('{{ route('ktp.fetchData') }}', function(data) {
                $('#table').html(data);
                $('#myTable').DataTable();
            });
        }

        function create() {
            var url = '{{ route('ktp.create') }}';
            $.get(url, function(data) {
                $('#exampleModalLabel').html('Tambah KTP');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }

        function store() {
            // Ambil semua data input dari form
            var kartu_keluarga_id = $('#kartu_keluarga_id').val();
            var NIK = $('#NIK').val();
            var nama_lengkap = $('#nama_lengkap').val();
            var tempat_lahir = $('#tempat_lahir').val();
            var tanggal_lahir = $('#tanggal_lahir').val();
            var jenis_kelamin = $('#jenis_kelamin').val();
            var agama = $('#agama').val();
            var pendidikan = $('#pendidikan').val();
            var pekerjaan = $('#pekerjaan').val();
            var status_pernikahan = $('#status_pernikahan').val();
            var hubungan_keluarga = $('#hubungan_keluarga').val();
            var kewarganegaraan = $('#kewarganegaraan').val();
            var no_paspor = $('#no_paspor').val();
            var no_kitas = $('#no_kitas').val();
            var nama_ayah = $('#nama_ayah').val();
            var nama_ibu = $('#nama_ibu').val();

            $.ajax({
                url: "{{ route('ktp.store') }}", // Pastikan route yang benar untuk penyimpanan data
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    kartu_keluarga_id: kartu_keluarga_id,
                    NIK: NIK,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    agama: agama,
                    pendidikan: pendidikan,
                    pekerjaan: pekerjaan,
                    status_pernikahan: status_pernikahan,
                    hubungan_keluarga: hubungan_keluarga,
                    kewarganegaraan: kewarganegaraan,
                    no_paspor: no_paspor,
                    no_kitas: no_kitas,
                    nama_ayah: nama_ayah,
                    nama_ibu: nama_ibu,
                },
                success: function(response) {
                    if (response.success) {
                        // Menampilkan alert sukses
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


        function edit(id) {
            var url = '/ktp/' + id + '/edit';
            $.get(url, function(data) {
                $('#exampleModalLabel').html('Edit KTP');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }

        function update(id) {
            var kartu_keluarga_id = $('#kartu_keluarga_id').val();
            var NIK = $('#NIK').val();
            var nama_lengkap = $('#nama_lengkap').val();
            var tempat_lahir = $('#tempat_lahir').val();
            var tanggal_lahir = $('#tanggal_lahir').val();
            var jenis_kelamin = $('#jenis_kelamin').val();
            var agama = $('#agama').val();
            var pendidikan = $('#pendidikan').val();
            var pekerjaan = $('#pekerjaan').val();
            var status_pernikahan = $('#status_pernikahan').val();
            var hubungan_keluarga = $('#hubungan_keluarga').val();
            var kewarganegaraan = $('#kewarganegaraan').val();
            var no_paspor = $('#no_paspor').val();
            var no_kitas = $('#no_kitas').val();
            var nama_ayah = $('#nama_ayah').val();
            var nama_ibu = $('#nama_ibu').val();

            // Gunakan route resource untuk update
            var url = '{{ route('ktp.update', ':id') }}';
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                method: 'PUT',
                data: {
                    _token: "{{ csrf_token() }}",
                    kartu_keluarga_id: kartu_keluarga_id,
                    NIK: NIK,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    agama: agama,
                    pendidikan: pendidikan,
                    pekerjaan: pekerjaan,
                    status_pernikahan: status_pernikahan,
                    hubungan_keluarga: hubungan_keluarga,
                    kewarganegaraan: kewarganegaraan,
                    no_paspor: no_paspor,
                    no_kitas: no_kitas,
                    nama_ayah: nama_ayah,
                    nama_ibu: nama_ibu,
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
            var url = '{{ route('ktp.destroy', ':id') }}';
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

        function showDetail(id) {
            var url = '{{ route('ktp.show', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {
                $('#exampleModalLabel').html('Detail KTP');
                $('#modal-body').html(data);
                $('#exampleModal').modal('show');
            });
        }
    </script>
@endpush
