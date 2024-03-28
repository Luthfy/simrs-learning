{{ $title }}

<a href="{{ url('pasien/create') }}">Tambah</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>MR</th>
    </tr>
    @forelse ($patients as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->record_number }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="3">Data Tidak Ditemukan</td>
    </tr>
    @endforelse
</table>

