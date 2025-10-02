<table border="1" width="100%">
    <tr>
        <th align="center">No.</th>
        <th align="center">Judul</th>
        <th align="center">Penulis</th>
        <th align="center">Penerbit</th>
        <th align="center">Tahun</th>
        <th colspan="2" align="center">Aksi</th>
    </tr>
    @php $i = 1; @endphp
    @foreach ($data as $m)
        <tr>
            <td align="center">{{ $i }}</td>
            <td align="center">{{ $m->judul }}</td>
            <td align="center">{{ $m->penulis }}</td>
            <td align="center">{{ $m->penerbit }}</td>
            <td align="center">{{ $m->tahun }}</td>
            <td align="center">
            <td align="center">
                <a href="{{ route('buku.edit', $m->id) }}">Edit</a>
            </td>

            </td>
            <td align="center">
                <form action="{{ route('buku.destroy', $m->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @php $i++; @endphp
    @endforeach
</table>
