<?php

//koneksi
$server="localhost";
$user="root";
$password="";
$nama_database="penjualann";
$koneksi= mysqli_connect($server, $user, $password, $nama_database);
// connection dan koneksi berbeda
if(!$koneksi){
    die("Gagal terhubung dengan database:" .mysqli_connect_error());
}

//akhir koneksi

?>