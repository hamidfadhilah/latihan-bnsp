<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $q = "UPDATE prodi SET
        kode_prodi = '$_POST[kode_prodi]',
        nama_prodi = '$_POST[nama_prodi]'
        WHERE kode_prodi = '$_POST[kode_prodi]'
    ";

    $exec = mysqli_query($konek, $q);

    echo "Data berhasil diubah. | <a href='?page=list_prodi'>Kembali ke Prodi</a>";
}

$q = "SELECT * FROM prodi WHERE kode_prodi = $_GET[kode_prodi]";
$exec = mysqli_query($konek, $q);
$field = mysqli_fetch_assoc($exec);
?>
<h2>Edit Prodi</h2>
<form method="POST">
    <table>
        <tr>
            <td>Kode Prodi</td>
            <td><input value="<?= $field['kode_prodi'] ?>" type="text" name="kode_prodi" readonly></td>
        </tr>
        <tr>
            <td>Nama Prodi</td>
            <td><input value="<?= $field['nama_prodi'] ?>" type="text" name="nama_prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit">Ubah</button>
            </td>
        </tr>
    </table>
</form>
<h3>Panduan:</h3>
<ul>
    <li>Edit bidang data prodi.</li>
    <li>Tekan tombol simpan.</li>
</ul>