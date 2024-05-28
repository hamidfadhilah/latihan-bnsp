<?php
include 'koneksi.php';

$q = "DELETE FROM mhs WHERE nim = $_GET[nim]";
$exec = mysqli_query($konek, $q);

if (isset($exec)) {
    header('location: ?page=list_mhs');
}
