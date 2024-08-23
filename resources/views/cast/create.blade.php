<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Tambah Cast Baru</h1>
    <form method="POST" action="/cast">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div><br>

        <div>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" required>
        </div><br>
        <div>
            <label for="bio">bio:</label>
            <textarea id="bio" name="bio" required></textarea>
        </div><br>
        <button type="submit">Simpan</button>
    </form><br>
    <a href="/cast">Kembali</a>
</body>
</html>