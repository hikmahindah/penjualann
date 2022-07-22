<?php

//include koneksi database
include('koneksii.php');

//get data dari form
$id_transaksi_detail        = $_POST['id_transaksi_detail'];
$id_transaksi           = $_POST['id_transaksi'];
$id_barang     = $_POST['id_barang'];
$jumlah             = $_POST['jumlah'];
$harga_jual          = $_POST['harga_jual'];
$total_harga         = $_POST['total_harga'];
$total_bayar          = jumlah * harga_jual;
//query insert data ke dalam database
$query = "INSERT INTO cabang (id_transaksi_detail, kode_inv, waktu_transaksi, id_kasir,id_member,nama_pembeli,total_bayar) VALUES ('$id_transaksi_datail', '$kode_inv', '$waktu_transaksi','$id_kasir','$id_member','$nama_pembeli','$total_bayar')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tampiltransaksidetail.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>