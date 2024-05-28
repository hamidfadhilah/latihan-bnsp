<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $q = "INSERT INTO mhs(
        nim,
        nama,
        kode_prodi,
        tempat_lahir,
        tgl_lahir
        ) VALUES (
            '$_POST[nim]',
            '$_POST[nama]',
            '$_POST[kode_prodi]',
            '$_POST[tempat_lahir]',
            '$_POST[tgl_lahir]'
        )
    ";
    $exec = mysqli_query($konek, $q);

    echo "Data berhasil disimpan. | <a href='?page=list_mhs'>Kembali ke Mahasiswa</a>";
}
?>
<h2>Tambah Mahasiswa</h2>
<form method="POST">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <select name="kode_prodi">
                    <?php
                    $q = 'SELECT * FROM prodi';
                    $exec = mysqli_query($konek, $q);

                    echo "<option></option>";

                    while ($row = mysqli_fetch_assoc($exec)) {
                        echo "<option value='$row[kode_prodi]'>$row[nama_prodi]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tgl_lahir"></td>
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
    <li>Isi semua bidang data mahasiswa.</li>
    <li>Tekan tombol simpan.</li>
</ul>