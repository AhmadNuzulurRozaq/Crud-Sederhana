<!DOCTYPE html>
<html>
  <head>
    <title>APLIKASI DATA BUKU</title>
  </head>
  <body>
    <main>
      <h1>APLIKASI DATA BUKU</h1>
      <span>SELAMAT DATANG DI APLIKASI DATA BUKU</span>
      <hr>
      <fieldset>
        <span>Silahkan pilih menu dibawah ini : </span>
        <ol>
          <li><a href="{{ route('buku.index') }}">TAMPILKAN DATA BUKU</a></li>
          <li><a href="{{ route('buku.create') }}">TAMBAHKAN DATA BUKU</a></li>
        </ol>
      </fieldset>
    </main>
  </body>
</html>