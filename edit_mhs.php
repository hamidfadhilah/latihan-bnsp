<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $q = "UPDATE mhs SET
        nim = '$_POST[nim]',
        nama = '$_POST[nama]',
        kode_prodi = '$_POST[kode_prodi]',
        tempat_lahir = '$_POST[tempat_lahir]',
        tgl_lahir = '$_POST[tgl_lahir]'
        WHERE nim = '$_POST[nim]'
    ";

    $exec = mysqli_query($konek, $q);

    echo "Data berhasil diubah. | <a href='?page=list_mhs'>Kembali ke Mahasiswa</a>";
}

$q = "SELECT * FROM mhs WHERE nim = $_GET[nim]";
$exec = mysqli_query($konek, $q);
$field = mysqli_fetch_assoc($exec);
?>
<h2>Edit Mahasiswa</h2>
<form method="POST">
    <table>
        <tr>
            <td>NIM</td>
            <td><input value="<?= $field['nim'] ?>" type="text" name="nim" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input value="<?= $field['nama'] ?>" type="text" name="nama"></td>
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
                        if ($field['kode_prodi'] == $row['kode_prodi']) {
                            echo "<option value='$row[kode_prodi]' selected>$row[nama_prodi]</option>";
                        } else {
                            echo "<option value='$row[kode_prodi]'>$row[nama_prodi]</option>";
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input value="<?= $field['tempat_lahir'] ?>" type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input value="<?= $field['tgl_lahir'] ?>" type="date" name="tgl_lahir"></td>
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
    <li>Edit bidang data mahasiswa.</li>
    <li>Tekan tombol simpan.</li>
</ul>