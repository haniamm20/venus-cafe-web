<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "venus_cafe"
);

if (!$conn) {
    die("Koneksi Database Gagal!");
}

?>