<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_db = "pendaftaran_siswa_baru";

    $db = mysqli_connect($server, $user, $password, $nama_db);

    if(!$db) {
        die("Gagal terhubung dengan database : ". mysqli_connect_error());
    }
?>