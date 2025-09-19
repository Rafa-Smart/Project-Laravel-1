<form action="{{ url('buku') }}" method="post">
    @csrf
    <input type="text" name="id">
    <input type="text" name="category_id">
    <input type="text" name="judul">
    <input type="text" name="penulis">
    <input type="text" name="penerbit">
    <input type="text" name="tahun">
    <button name="kirim">Kirim</button>
</form>