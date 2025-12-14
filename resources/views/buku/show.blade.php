<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail - {{ $buku->judulBuku }}</title>
    <style>
        .cell-1{
            padding: 10px;
            white-space: nowrap; 
        }
    </style>
</head>
<body>
    <main>
        <h1>Detail Buku {{ $buku->judulBuku }}</h1>
        <hr>
        <span>Berikut dibawah ini merupakan detail lengkap buku.</span>
        <fieldset>
            <table border="0">
                <tr>
                    <td class="cell-1">Judul Buku</td>
                    <td>:</td>
                    <td><strong>{{ $buku->judulBuku }}</strong></td>
                </tr>
                <tr>
                    <td class="cell-1">Penulis Buku</td>
                    <td>:</td>
                    <td><strong>{{ $buku->penulisBuku }}</td>
                </tr>
                <tr>
                    <td class="cell-1">Penerbit Buku</td>
                    <td>:</td>
                    <td><strong>{{ $buku->penerbitBuku }}</strong></td>
                </tr>
                <tr>
                    <td class="cell-1">Tahun Terbit</td>
                    <td>:</td>
                    <td><strong>{{ $buku->tahunTerbit }}</strong></td>
                </tr>
                <tr>
                    <td class="cell-1">Deskripsi</td>
                    <td>:</td>
                    <td><strong>{{ $buku->deskripsiBuku }}</td>
                </tr>
            </table>
        </fieldset>
    </main>
</body>
</html>