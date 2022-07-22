<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_supplier     = $_POST['id_supplier'];
$nama_supplier  = $_POST['nama_supplier'];
$no_tlpn   = $_POST['no_tlpn'];
$alamat        = $_POST['alamat'];
$no_rek    = $_POST['no_rek'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET id_supplier = '$id_supplier', nama_supplier = '$nama_supplier', no_tlpn= '$no_tlpn', alamat = '$alamat',no_rek= '$no_rek' WHERE id_supplier = '$id_supplier'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>