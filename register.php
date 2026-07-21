<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register | VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-5">

<div class="card shadow">

<div class="card-body">

<h2 class="text-center mb-4">
☕ Register VENUS CAFE
</h2>

<form action="proses-register.php" method="POST">

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>

<button
type="submit"
class="btn btn-success w-100">

Daftar

</button>

<a href="index.php" class="btn btn-secondary w-100 mt-2">
🏠 Kembali ke Home
</a>

</form>

<p class="text-center mt-3">

Sudah punya akun?

<a href="login.php">

Login

</a>

</p>

</div>

</div>

</div>

</div>

</div>

</body>
</html>