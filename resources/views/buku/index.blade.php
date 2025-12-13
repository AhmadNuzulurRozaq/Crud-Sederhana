<!DOCTYPE html>
<html>
  <head>
    <title>HOME | INDEX</title>
  </head>
  <body>
    <main>
      <h1>TABEL DATA BUKU</h1>
      <hr>
      <table border='1' style="text-align: center">
        <thead>
          <tr>
            <th>NO</th>
            <th>JUDUL BUKU</th>
            <th>PENULIS BUKU</th>
            <th>PENERBIT BUKU</th>
            <th>TAHUN TERBIT</th>
          </tr>
        </thead>
        @foreach ($bukus as $buku)
        <tbody>
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$buku->judulBuku}}</td>
            <td>{{$buku->penulisBuku}}</td>
            <td>{{$buku->penerbitBuku}}</td>
            <td>{{$buku->tahunTerbit}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </main>
  </body>
</html>