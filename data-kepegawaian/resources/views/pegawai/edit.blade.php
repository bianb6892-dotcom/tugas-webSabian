<h1>Edit Pegawai</h1>

<form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama: <input type="text" name="nama" value="{{ $pegawai->nama }}"><br>
    NIP: <input type="text" name="nip" value="{{ $pegawai->nip }}"><br>
    Jabatan: <input type="text" name="jabatan" value="{{ $pegawai->jabatan }}"><br>
    Alamat: <input type="text" name="alamat" value="{{ $pegawai->alamat }}"><br>

    <button type="submit">Update</button>
</form>
