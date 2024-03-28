{{ $title }}

<form action="{{ url('pasien/store') }}" method="post">
    @csrf

    <div>
        <label for="">Nama</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="">Medical Record</label>
        <input type="text" name="record_number" id="record_number">
    </div>

    <div>
        <label for="">Phone</label>
        <input type="text" name="phone_number" id="phone_number">
    </div>

    <button type="submit">Simpan</button>

</form>