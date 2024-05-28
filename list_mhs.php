<?php
include 'koneksi.php';
?>
<h2>Mahasiswa</h2>
<table border="1" cellspacing="0" cellpadding="4">
    <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Prodi</td>
        <td>Tempat Lahir</td>
        <td>Tgl Lahir</td>
        <td>Aksi</td>
    </tr>
    <tr>
        <?php
        $q = 'SELECT * FROM mhs JOIN prodi ON mhs.kode_prodi = prodi.kode_prodi';
        $exec = mysqli_query($konek, $q);

        while ($row = mysqli_fetch_assoc($exec)) {
            echo "
            <tr>
                <td>$row[nim]</td>
                <td>$row[nama]</td>
                <td>$row[nama_prodi]</td>
                <td>$row[tempat_lahir]</td>
                <td>$row[tgl_lahir]</td>
                <td>
                    <a href='?page=edit_mhs&nim=$row[nim]'>Edit</a>
                    <a href='?page=delete_mhs&nim=$row[nim]' onclick='return confirm(`Hapus mahasiswa $row[nim]`)'>Hapus</a>
                </td>
            </tr>
            ";
        }
        ?>
    </tr>
</table>
<a href="?page=add_mhs">Tambah Mahasiswa</a>
<h3>Panduan:</h3>
<ul>
    <li>Tambah Mahasiswa: masuk ke form data mahasiswa.</li>
    <li>Edit: masuk ke form edit data mahasiswa.</li>
    <li>Hapus: menghapus data mahasiswa yang dipilih.</li>
</ul>