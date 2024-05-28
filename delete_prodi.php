<?php
include 'koneksi.php';

$q = "DELETE FROM prodi WHERE kode_prodi = $_GET[kode_prodi]";
$exec = mysqli_query($konek, $q);

if (isset($exec)) {
    header('location: ?page=list_prodi');
}
