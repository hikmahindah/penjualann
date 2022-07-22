<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM cabang WHERE id_cabang = '$id'";

if($koneksi->query($query)) {
    header("location: tampilcabang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>