<?php

include "koneksi.php";

$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$meja = $_POST['meja'];
$jumlah_orang = $_POST['jumlah_orang'];
$catatan = $_POST['catatan'];

$query = mysqli_query($conn, "INSERT INTO booking
(nama, telepon, tanggal, jam, meja, jumlah_orang, catatan)
VALUES
('$nama','$telepon','$tanggal','$jam','$meja','$jumlah_orang','$catatan')");

if($query){

    echo "<script>
    alert('Booking berhasil!');
    window.location='index.php';
    </script>";

}else{

    echo "<script>
    alert('Booking gagal!');
    window.location='booking.php';
    </script>";

}

?>