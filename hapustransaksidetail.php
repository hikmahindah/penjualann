<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaksi_detail WHERE id _transaksi_detail = '$id'";

if($koneksi->query($query)) {
    header("location: tampiltransaksidetail.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>