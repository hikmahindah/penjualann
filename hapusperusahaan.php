<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM perusahaan WHERE id_perusahaan = '$id'";

if($koneksi->query($query)) {
    header("location: tampilperusahaan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>