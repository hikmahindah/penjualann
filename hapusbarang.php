<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id_barang = '$id'";

if($koneksi->query($query)) {
    header("location: tampildatabarang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>