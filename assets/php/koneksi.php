<?php
    $hostname ='localhost';
    $username ='root';
    $password ='';
    $database ='mulmed';

    $koneksi = mysqli_connect($hostname,$username,$password,$database);

    if(!$koneksi){
        echo "Gagal Terkoneksi".mysqli_connect_errot();
        exit ();
    }
?>