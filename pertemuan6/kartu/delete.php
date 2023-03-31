<?php
require_once '../dbkoneksi.php';

// Menangkap data iddel dari URL
$_iddel = $_GET['iddel'];
$sql = "DELETE FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:index.php');
