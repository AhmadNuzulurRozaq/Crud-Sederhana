<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH DATA BUKU</title>
  </head>
  <body>
    <main>
      <h1>TAMBAH DATA BUKU</h1>
      <span>TAMBAH DATA BUKU DENGAN SANGAT MUDAH</span>
      <hr>
      <fieldset>
        <span>Masukkan data buku dibawah ini. Pastikan data yang di input sudah benar.</span>
        <form action="{{ route('buku.store') }}" method="POST">
          @csrf
          <div class="form-create">
            <div class="item-create">
              <label>Judul Buku</label>
              <input type="text" name="judulBuku" placeholder="Ketik judul buku..." required>
            </div>
            <div class="item-create">
              <label>Penulis Buku</label>
              <input type="text" name="penulisBuku" placeholder="Ketik penulis buku..." required>
            </div>
            <div class="item-create">
              <label>Penerbit Buku</label>
              <input type="text" name="penerbitBuku" placeholder="Ketik penerbit buku..." required>
            </div>
            <div class="item-create">
              <label>Tahun Terbit</label>
              <select id="listTahun" name="tahunTerbit" required>
                <option value="">--- PILIH TAHUN TERBIT ---</option>
              </select>
            </div>
            <div class="sendButton">
              <button type="submit">KIRIM</button>
            </div>
          </div>
        </form>
      </fieldset>
    </main>
  </body>
  <script>
    const dropdown = document.getElementById('listTahun');
    const tahunSekarang = new Date().getFullYear();
    const tahunAwal = 1900;
    
    for(let i = tahunSekarang; i >= tahunAwal; i--){
      const opsi = document.createElement('option');
      opsi.value = i;
      opsi.text = i;
      dropdown.appendChild(opsi);
    }
  </script>
</html>