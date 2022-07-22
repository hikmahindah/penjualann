<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM metode_pembayaran WHERE id_metode_pembayaran = '$id'";

if($koneksi->query($query)) {
    header("location: tampilmetodepembayaran.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>