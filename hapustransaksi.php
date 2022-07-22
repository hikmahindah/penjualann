<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id _transaksi = '$id'";

if($koneksi->query($query)) {
    header("location: tampiltransaksi.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>