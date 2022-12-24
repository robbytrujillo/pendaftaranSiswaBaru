<?php
include("config.php");

if(isset($_GET['id'])) {

    //ambil id dari query string
    $id = $_GET['id'];

    //abuat query hapus
    $sql = "DELETE FROM calon_siswa_baru WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query berhasil dihapus?
    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus");
    }
} else {
    die("akses dilarang");
}
?>