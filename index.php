<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
☕ VENUS CAFE
</a>

<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarMenu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="menu.php">Menu</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">Tentang</a>
</li>

<li class="nav-item">
<a class="nav-link" href="booking.php">Booking</a>
</li>

<?php if(isset($_SESSION['login'])){ ?>

<li class="nav-item">
<a class="nav-link">
👋 <?= $_SESSION['nama']; ?>
</a>
</li>

<li class="nav-item">
<a class="nav-link text-danger" href="logout.php">
Logout
</a>
</li>

<?php }else{ ?>

<li class="nav-item">
<a class="nav-link" href="login.php">
Login
</a>
</li>

<?php } ?>

</ul>

</div>

</div>

</nav>

<section class="hero" id="home">

<div class="container" data-aos="fade-up">

<h1 data-aos="fade-down">
Welcome to <span>VENUS CAFE</span>
</h1>

<p data-aos="fade-up">
Nikmati kopi berkualitas dengan suasana nyaman,     
tersedia pesanan online maupun offline.
</p>

<div data-aos="zoom-in" data-aos-delay="300">

<a href="menu.php" class="btn btn-warning btn-lg mt-3">
☕ Pesan Sekarang
</a>

<a href="booking.php" class="btn btn-outline-light btn-lg mt-3 ms-2">
🪑 Booking Meja
</a>

</div>

</div>

</section>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/menu.js"></script>

<footer class="footer">

    <div class="container footer-content">

        <span>☕ <strong>VENUS CAFE</strong></span>

        <span>📍 Jl. Maguwo, Banguntapan, Bantul No.26, Yogyakarta</span>

        <span>📞 0889-8599-3945</span>

        <span>✉️ venuscafe@gmail.com</span>

        <span>© 2026 VENUS CAFE. All Rights Reserved.</span>

    </div>

</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init();
</script>

</body>
</html>