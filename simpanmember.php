<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_member   = $_POST['id_member'];
$nama_member = $_POST['nama_member'];
$no_tlpn      = $_POST['no_tlpn'];
$alamat = $_POST['alamat'];
$jenis_kelamin= $_POST['jenis_kelamin'];

//query insert data ke dalam database
$query = "INSERT INTO member (id_member, nama_member, no_tlpn ,alamat, jenis_kelamin) VALUES ('$id_member', '$nama_member', '$no_tlpn','$alamat','$jenis_kelamin')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>