<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking | VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
☕ VENUS CAFE
</a>

</div>

</nav>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-lg-7">

<div class="card shadow">

<div class="card-body">

<h2 class="text-center mb-4">
🪑 Booking Meja
</h2>

<form action="proses-booking.php" method="POST">

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>No. Telepon</label>
<input type="text" name="telepon" class="form-control" required>
</div>

<div class="mb-3">
<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<div class="mb-3">
<label>Jam</label>
<input type="time" name="jam" class="form-control" required>
</div>

<div class="mb-3">
<label>Jenis Meja</label>

<select name="meja" class="form-select">

<option>Regular</option>
<option>VIP</option>
<option>Outdoor</option>

</select>

</div>

<div class="mb-3">
<label>Jumlah Orang</label>
<input type="number" name="jumlah_orang" class="form-control" required>
</div>

<div class="mb-3">
<label>Catatan</label>
<textarea name="catatan" class="form-control"></textarea>
</div>

<button class="btn btn-warning w-100">
Booking Sekarang
</button>

<a href="index.php" class="btn btn-danger w-100 mt-2">
❌ Batal
</a>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>