<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_kasir      = $_POST['id_kasir'];
$nama_kasir    = $_POST['nama_kasir'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_tlpn       = $_POST['no_tlpn'];
$id_cabang     = $_POST['id_cabang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kasir SET id_kasir = '$id_kasir', nama_kasir = '$nama_kasir', alamat = '$alamat',jenis_kelamin='$jenis_kelamin',no_tlpn= '$no_tlpn',id_cabang= '$id_cabang' WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>