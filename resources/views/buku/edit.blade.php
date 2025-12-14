<!DOCTYPE html>
<html>
  <head>
    <title>Edit Data Buku</title>
  </head>
  <body>
    <main>
      <h1>EDIT DATA BUKU</h1>
      <span>EDIT DATA BUKU DENGAN SANGAT MUDAH</span>
      <hr>
      <span>Jika ada perubahan pada data buku silahkan di edit dibawah ini. Pastikan data yang di input sudah benar.</span>
      <fieldset>
        <form action="{{ route('buku.update', $buku->id) }}" method="POST" onsubmit="return confirm('Apakah anda ingin mengupdate data ini ?')">
          @csrf
          @method('PUT')
          <div class="form-create">
            <div class="item-create">
              <label>Judul Buku</label>
              <input type="text" name="judulBuku" placeholder="Ketik judul buku..." value="{{ old('judulBuku', $buku->judulBuku) }}" required>
            </div>
            <div class="item-create">
              <label>Penulis Buku</label>
              <input type="text" name="penulisBuku" placeholder="Ketik penulis buku..." value="{{ old('penulisBuku', $buku->penulisBuku) }}" required>
            </div>
            <div class="item-create">
              <label>Penerbit Buku</label>
              <input type="text" name="penerbitBuku" placeholder="Ketik penerbit buku..." value="{{ old('penerbitBuku', $buku->penerbitBuku) }}" required>
            </div>
            <div class="item-create">
              <label>Tahun Terbit</label>
                <select id="listTahun" name="tahunTerbit" required>
                    <option value="{{ old('tahunTerbit', $buku->tahunTerbit) }}" disabled selected>{{ old('tahunTerbit', $buku->tahunTerbit) }}</option>
                </select>
            </div>
            <div class="item-create">
              <label>Deskripsi Buku</label>
              <textarea name="deskripsiBuku" id="" cols="30" rows="10"  required>{{ old('deskripsiBuku', $buku->deskripsiBuku) }}</textarea>
            </div>
            <div class="sendButton">
              <button type="submit">UPDATE</button>
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
