<!DOCTYPE html>
<html>
  <head>
    <title>Tabel Buku</title>
  </head>
  <body>
    <main>
      <h1>TABEL DATA BUKU</h1>
      <span>LIST DATA TABEL BUKU | </span>
      <span>Total Buku : {{ $total_buku }}</span>
      <hr>
      @if (session('success'))
        <div>
          {{ session('success') }}
        </div>
      @endif
      <table border='1' style="text-align: center">
        <thead>
          <tr>
            <th>NO</th>
            <th>JUDUL BUKU</th>
            <th>PENULIS BUKU</th>
            <th>PENERBIT BUKU</th>
            <th>TAHUN TERBIT</th>
            <th>AKSI</th>
          </tr>
        </thead>
        @foreach ($buku as $buku)
        <tbody>
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$buku->judulBuku}}</td>
            <td>{{$buku->penulisBuku}}</td>
            <td>{{$buku->penerbitBuku}}</td>
            <td>{{$buku->tahunTerbit}}</td>
            <td>
              <form action="{{ route('buku.show', $buku->id) }}">
                @csrf
                <input type="submit" value="SHOW">
              </form>
              <form action="{{ route('buku.edit', $buku->id) }}">
                @csrf
                <input type="submit" value="EDIT">
              </form>
              <form action="{{ route('buku.delete', $buku->id) }}" method="POST" onsubmit="return confirm('Apakah anda ingin menghapus data ?')">
                @csrf
                @method('delete')
                <input type="submit"  value="HAPUS">
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </main>
  </body>
  <script defer>
    function delete(){
      alert("WKWKW");
    }
  </script>
</html>