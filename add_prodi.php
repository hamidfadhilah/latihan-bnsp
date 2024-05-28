<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $q = "INSERT INTO prodi(
        kode_prodi,
        nama_prodi
        ) VALUES (
            '$_POST[kode_prodi]',
            '$_POST[nama_prodi]'
        )
    ";
    $exec = mysqli_query($konek, $q);

    echo "Data berhasil disimpan. | <a href='?page=list_prodi'>Kembali ke Prodi</a>";
}
?>
<h2>Tambah Prodi</h2>
<form method="POST">
    <table>
        <tr>
            <td>Kode Prodi</td>
            <td><input type="text" name="kode_prodi"></td>
        </tr>
        <tr>
            <td>Kode Nama</td>
            <td><input type="text" name="nama_prodi"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="submit">Simpan</button>
            </td>
        </tr>
    </table>
</form>
<h3>Panduan:</h3>
<ul>
    <li>Isi semua bidang data prodi.</li>
    <li>Tekan tombol simpan.</li>
</ul>