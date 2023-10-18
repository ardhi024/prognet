<?php
    $server = "prognet.localnet";
    $uname = "2205551024";
    $pass = "2205551024";
    $dbname = "db_2205551024";

    $koneksi = new mysqli($server, $uname, $pass, $dbname);
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } else {

    }
