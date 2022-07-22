<?php

include('koneksii.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM member WHERE id_member = '$id'";

if($koneksi->query($query)) {
    header("location: tampilmember.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>