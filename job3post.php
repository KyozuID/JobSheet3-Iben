<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
    <div class="tabel">
    <h2>Pesan Makanan Online</h2>
        <form action="job3get.php" method="POST">
        <label for="nomer">Nomer Telepon</label>
        <input type="tel" id="nomer" name="nomer" required placeholder="Masukkan Nomer Telepon Anda*">
        <br>
        <label for="alamat">Alamat </label>
        <input type="text" id="alamat" name="alamat" required placeholder="Masukkan Alamat Anda*">
        <br>
        <button>Kirim</button>
        </form>
    </div> 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nomer = htmlspecialchars($_POST["nomer"]);
    $alamat = htmlspecialchars($_POST["alamat"]);    
    // Menampilkan ringkasan pemesanan
    echo "<h3>Informasi Pemesan:</h3>";
    echo "<p>Nomer: $nomer</p>";
    echo "<p>Alamat: $alamat</p>";
}
?>
</body>
</html>