<!DOCTYPE html>
<html>
<head>
    <title>Proses Pesan</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data yang dikirim melalui POST
        $pesan = $_POST["pesan"];

        // Menampilkan pesan yang diterima
        echo "<h2>Pesan yang Anda kirim:</h2>";
        echo "<p>$pesan</p>";
    }
    ?>
</body>
</html>
