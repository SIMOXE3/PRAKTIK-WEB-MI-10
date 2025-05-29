<?php
include('koneksi_db.php');

$db = new koneksi_db();
if ($db->connect()) {
    echo "Koneksi berhasil!";
} else {
    echo "Koneksi gagal!";
}
?>
