<?php
$proses_awal = microtime(true);
session_start();
if (!isset($_SESSION['username'])) {
    header('location: /login.php');
}
$page = $_GET['page'] ?? 'list_mhs';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNSP - Hamid</title>
</head>

<body>
    <span>Username: <?=$_SESSION['username'] ?></span> | <a href="/logout.php">Logout</a>
    <hr>
    <a href="?page=list_mhs">Mahasiswa</a>
    <a href="?page=list_prodi">Prodi</a>
    <hr>
    <?php
include "$page.php";
?>
    <hr>

</body>

</html>
<?php
$proses_akhir = microtime(true);
$waktu_proses = $proses_akhir - $proses_awal;
echo "Waktu Proses: $waktu_proses detik";
