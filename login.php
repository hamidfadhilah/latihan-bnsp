<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: /');
    } else {
        echo "<script>alert('Username Dan Password Tidak Sesuai')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNSP - Hamid</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
    <h3>Panduan:</h3>
    <ul>
        <li>Masukan username.</li>
        <li>Masukan password.</li>
        <li>Tekan tombol login.</li>
    </ul>
</body>

</html>
