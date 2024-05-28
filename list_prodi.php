<?php
include 'koneksi.php';
?>
<h2>Prodi</h2>
<table border="1" cellspacing="0" cellpadding="4">
    <tr>
        <td>Kode Prodi</td>
        <td>Nama Prodi</td>
        <td>Aksi</td>
    </tr>
    <tr>
        <?php
        $q = 'SELECT * FROM prodi';
        $exec = mysqli_query($konek, $q);

        while ($row = mysqli_fetch_assoc($exec)) {
            echo "
            <tr>
                <td>$row[kode_prodi]</td>
                <td>$row[nama_prodi]</td>
                <td>
                    <a href='?page=edit_prodi&kode_prodi=$row[kode_prodi]'>Edit</a>
                    <a href='?page=delete_prodi&kode_prodi=$row[kode_prodi]' onclick='return confirm(`Hapus prodi $row[kode_prodi]`)'>Hapus</a>
                </td>
            </tr>
            ";
        }
        ?>
    </tr>
</table>
<a href="?page=add_prodi">Tambah Prodi</a>
<h3>Panduan:</h3>
<ul>
    <li>Tambah Prodi: masuk ke form data prodi.</li>
    <li>Edit: masuk ke form edit data prodi.</li>
    <li>Hapus: menghapus data prodi yang dipilih.</li>
</ul>