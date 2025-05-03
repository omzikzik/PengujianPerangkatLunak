<?php
session_start();
if (!isset($_SESSION['komentar'])) {
    $_SESSION['komentar'] = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['komentar'][] = $_POST['komentar'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stored XSS</title>
</head>
<body>
    <h2>Stored XSS Demo</h2>
    <form method="POST">
        Komentar: <input type="text" name="komentar">
        <input type="submit" value="Kirim">
    </form>

    <h3>Komentar Sebelumnya:</h3>
    <ul>
        <?php
        foreach ($_SESSION['komentar'] as $k) {
            echo "<li>" . $k . "</li>";
        }
        ?>
    </ul>
</body>
</html>