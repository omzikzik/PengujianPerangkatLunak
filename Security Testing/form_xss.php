<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar</title>
</head>
<body>
    <h2>Form Komentar Pengunjung</h2>
    
    <form method="POST">
        Nama: <input type="text" name="nama"><br><br>
        Komentar: <input type="text" name="komentar"><br><br>
        <input type="submit" value="Kirim">
    </form>

    <hr>

    <h3>Hasil Input:</h3>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Nama: " . $_POST['nama'] . "<br>";
            echo "Komentar: " . $_POST['komentar'];
        }
        ?>
    </p>
</body>
</html>