<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM supplier WHERE id_suplier= '$id'";

if($koneksi->query($query)) {
    header("location: tampilsupplier.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>