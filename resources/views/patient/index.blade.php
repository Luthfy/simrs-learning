{{ $title }}


@forelse ($patients as $item)
    <h3>{{ $item->name }}</h3>
@empty
    <p>Data Pasien Belum Ada</p>
@endforelse