<?php

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telpon = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    $kirim = mysqli_query($db, "INSERT INTO pelanggan (nama,email,telpon,alamat) VALUES ('$nama', '$email', '$telpon', '$alamat')");

    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');
        window.location='index.php'</script>";
    }else{
        echo ('gagal');
    }
}