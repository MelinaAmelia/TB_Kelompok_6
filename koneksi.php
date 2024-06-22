<?php
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'tb_perpus');
if (!$koneksi) {
    die('Could not connect: ' . mysqli_error());
}
?>
