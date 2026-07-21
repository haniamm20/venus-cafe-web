<?php
session_start();

include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($data) == 1){

    $user = mysqli_fetch_assoc($data);

    if(password_verify($password, $user['password'])){

        $_SESSION['login'] = true;
        $_SESSION['nama'] = $user['nama'];

        header("Location: index.php");
        exit;

    }else{

        echo "<script>
        alert('Password salah!');
        window.location='login.php';
        </script>";

    }

}else{

    echo "<script>
    alert('Email tidak ditemukan!');
    window.location='login.php';
    </script>";

}
?>