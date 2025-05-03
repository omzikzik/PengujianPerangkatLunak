<!DOCTYPE html>
<html>
<head>
    <title>Reflected XSS</title>
</head>
<body>
    <h2>Reflected XSS Demo</h2>
    <form method="GET" action="">
        Masukkan nama: <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
    if (isset($_GET['nama'])) {
        echo "<p>Halo, " . $_GET['nama'] . "</p>";
    }
    ?>
</body>
</html>
