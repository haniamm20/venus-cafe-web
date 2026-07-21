<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Menu | VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
☕ VENUS CAFE
</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarMenu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">Tentang</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="menu.php">Menu</a>
</li>

<li class="nav-item">
<a class="nav-link" href="booking.php">Booking</a>
</li>

</ul>

</div>

</div>

</nav>

<section class="menu py-5">

<div class="container">

<div class="text-center mb-5">

<h2>☕ Menu Venus Cafe</h2>

<p>Pilih makanan dan minuman favoritmu</p>

<button class="btn btn-dark m-1 filter-btn active" data-filter="all">Semua</button>
<button class="btn btn-outline-dark m-1 filter-btn" data-filter="coffee">☕ Coffee</button>
<button class="btn btn-outline-dark m-1 filter-btn" data-filter="drink">🥤 Non Coffee</button>
<button class="btn btn-outline-dark m-1 filter-btn" data-filter="food">🍔 Food</button>
<button class="btn btn-outline-dark m-1 filter-btn" data-filter="snack">🍟 Snack</button>
<button class="btn btn-outline-dark m-1 filter-btn" data-filter="dessert">🍰 Dessert</button>

<div class="row justify-content-center mt-4">

<div class="col-lg-6">

<input
type="text"
id="searchMenu"
class="form-control form-control-lg"
placeholder="🔍 Cari menu...">

</div>

</div>

</div>

<hr class="my-5">

<div class="row">

<div class="col-lg-8">

<div class="row g-4" id="semuaMenu">

</div>

</div>

<div class="col-lg-4">

<div class="card shadow cart-card">

<div class="card-header bg-dark text-white">

<h4>🛒 Keranjang</h4>

</div>

<div class="card-body">

<div id="cartItems">

<p class="text-muted">
Keranjang masih kosong
</p>

</div>

<hr>

<h5>

Total :
<span id="cartTotal">
Rp0
</span>

</h5>

<button
type="button"
class="btn btn-warning w-100 mt-3"
onclick="checkout()">

Lanjut Checkout →

</button>

</div>

</div>

</div>

</div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/menu.js"></script>

</body>
</html>

