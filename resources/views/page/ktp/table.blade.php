<div class="table-responsive">
    <table id="myTable" class="display cell-border text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">No KK</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->isEmpty())
                <tr>
                    <td colspan="18" class="text-center">Data is empty</td>
                </tr>
            @else
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kartu_keluarga->no_kartu_keluarga }}</td>
                        <td>{{ $item->NIK }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>
                            <button onclick="deleteData({{$item->id}})" class="btn btn-danger">Hapus</button>
                            <a onclick="edit({{ $item->id }})" class="btn btn-warning">Edit</a>
                            <a onclick="showDetail({{ $item->id }})" class="btn btn-secondary">Show
                                Detail</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
