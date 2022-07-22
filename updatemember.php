<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_member     = $_POST['id_member'];
$nama_member   = $_POST['nama_member'];
$no_tlpn          = $_POST['no_tlpn'];
$alamat   = $_POST['alamat'];
$jenis_kelamin   = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE member SET id_member = '$id_member', nama_member = '$nama_member', no_tlpn = '$no_tlpn',alamat= '$alamat'jenis_kelamin='$jenis_kelamin' WHERE id_member = '$id_member'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>