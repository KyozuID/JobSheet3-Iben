<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Makanan</title>
    <link rel="stylesheet" href="get.css">
    <style>
      
    </style>
</head>
<body>
    <h2>Pilih Makanan Yang Ingin Dibeli</h2>
    <form action="job3get.php" method="get">
        <label for="makananMinuman">Pilih Makanan & Minuman</label><br>
        <input type="checkbox" name="menu[]" value="Nasi Goreng"> Nasi Goreng<br>
        <input type="checkbox" name="menu[]" value="Mie Goreng"> Mie Goreng<br>
        <input type="checkbox" name="menu[]" value="Ayam Bakar"> Ayam Bakar<br>
        <input type="checkbox" name="menu[]" value="Es Teh"> Es Teh<br>
        <input type="checkbox" name="menu[]" value="Es Jeruk"> Es Jeruk<br>
        <input type="submit" value="Kirim">
    </form>
    <?php
    // Menangani pengiriman formulir
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h2>Pesanan:</h2>";
        if (isset($_GET["menu"]) && is_array($_GET["menu"])) {
            $pesanan = array_map("htmlspecialchars", $_GET["menu"]);
            echo "<table>";
            echo "<tr><th>Makanan/Minuman</th></tr>";
            foreach ($pesanan as $item) {
                echo "<tr><td>$item</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<h2>Tidak ada pesanan yang dipilih.</h2>";
        }
    }
    ?>
</body>
</html>
