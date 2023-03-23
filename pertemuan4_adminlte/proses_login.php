<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        //Membuat Session
        $_SESSION["username"] = $username;
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location:admin.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
} else {
    echo 'gagal';
}
