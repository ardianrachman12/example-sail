<div class="table-responsive">
    <table id="myTable" class="display cell-border text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomor Kartu Keluarga</th>
                <th scope="col">Nama Kepala Keluarga</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($data->isEmpty())
                <tr>
                    <td colspan="12" class="text-center">Data is empty</td>
                </tr>
            @else
                @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->no_kartu_keluarga }}</td>
                        <td>{{ $item->nama_kepala_keluarga }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            {{-- <form action="{{ route('kartu-keluarga.destroy', $item->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE') --}}
                                <button type="submit" class="btn btn-danger mb-2"
                                    onclick="deleteData({{$item->id}})">Hapus</button>
                            {{-- </form> --}}
                            <a onclick="edit({{$item->id}})" class="btn btn-warning mb-2">
                                Edit
                            </a>
                            <a onclick="showDetail({{$item->id}})" class="btn btn-secondary mb-2">Show</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
