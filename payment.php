<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout | VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
☕ VENUS CAFE
</a>

<div class="ms-auto">

<a href="menu.php" class="btn btn-warning">

← Kembali ke Menu

</a>

</div>

</div>

</nav>

<section class="container py-5">

<h2 class="text-center mb-5 text-white fw-bold">
    💳 Checkout Pesanan
</h2>

<div class="row">

<div class="col-lg-7">

<div class="card shadow">

<div class="card-body">

<h4>📝 Detail Pemesan</h4>

<hr>

<div class="mb-3">

<label>Nama</label>

<input
type="text"
id="namaPelanggan"
class="form-control">

</div>

<div class="mb-3">

<label>Nomor Meja</label>

<input
type="text"
id="nomorMeja"
class="form-control">

</div>

<div class="mb-3">

<label>Catatan</label>

<textarea
id="catatan"
class="form-control"
rows="3"></textarea>

</div>

<h4 class="mt-4">

💳 Metode Pembayaran

</h4>

<hr>

<div>

<input type="radio"
name="bayar"
value="tunai"
checked>

Tunai

</div>

<div>

<input type="radio"
name="bayar"
value="qris">

QRIS

</div>

<div>

<input type="radio"
name="bayar"
value="transfer">

Transfer

</div>

<div id="detailPembayaran"
class="mt-4">

</div>

<button
class="btn btn-success w-100 mt-4"
onclick="prosesPesanan()">

Konfirmasi Pesanan

</button>

</div>

</div>

</div>

<div class="col-lg-5">

<div class="card shadow">

<div class="card-body">

<h4>

🛒 Ringkasan Pesanan

</h4>

<hr>

<div id="checkoutItems">

Belum ada pesanan

</div>

<hr>

<h5>

Subtotal :

<span id="subtotalCheckout">

Rp0

</span>

</h5>

<h5>

PPN :

<span id="ppnCheckout">

Rp0

</span>

</h5>

<h3>

Total :

<span id="totalCheckout">

Rp0

</span>

</h3>

</div>

</div>

</div>

</div>

</section>

<script>

const cart = JSON.parse(localStorage.getItem("cart")) || [];
console.log(cart);

let subtotal = 0;
let html = "";

cart.forEach(item => {

    subtotal += item.harga * item.jumlah;

    html += `
        <div class="d-flex justify-content-between mb-2">
            <span>${item.nama} x${item.jumlah}</span>
            <span>Rp${(item.harga * item.jumlah).toLocaleString("id-ID")}</span>
        </div>
    `;

});

const ppn = subtotal * 0.11;
const total = subtotal + ppn;

document.getElementById("checkoutItems").innerHTML = html;
document.getElementById("subtotalCheckout").innerHTML = "Rp" + subtotal.toLocaleString("id-ID");
document.getElementById("ppnCheckout").innerHTML = "Rp" + ppn.toLocaleString("id-ID");
document.getElementById("totalCheckout").innerHTML = "Rp" + total.toLocaleString("id-ID");

</script>

<script>

function tampilDetailPembayaran(){

    const metode = document.querySelector('input[name="bayar"]:checked').value;

    const detail = document.getElementById("detailPembayaran");

    if(metode=="tunai"){

        detail.innerHTML=`
            <div class="alert alert-success">
                <h5>💵 Pembayaran Tunai</h5>
                <p>Silakan melakukan pembayaran di kasir setelah pesanan selesai.</p>
            </div>
        `;

    }

    else if(metode=="qris"){

        detail.innerHTML=`
            <div class="text-center">

                <img src="assets/images/qris-demo.png"
                class="img-fluid"
                style="max-width:250px;">

                <p class="mt-3">
                    Scan QR di atas untuk melakukan pembayaran.
                </p>

            </div>
        `;

    }

    else{

        detail.innerHTML=`
            <div class="card p-3">

                <img src="assets/images/bca.png"
                style="width:120px"
                class="mb-3">

                <h5>Bank BCA</h5>

                <h4>1234567890</h4>

                <p>a.n VENUS CAFE</p>

            </div>
        `;

    }

}

document.querySelectorAll('input[name="bayar"]').forEach(radio=>{

    radio.addEventListener("change",tampilDetailPembayaran);

});

tampilDetailPembayaran();

</script>

<script>

function prosesPesanan(){
    console.log("prosesPesanan dipanggil");

    const nama = document.getElementById("namaPelanggan").value;
    const meja = document.getElementById("nomorMeja").value;
    const catatan = document.getElementById("catatan").value;
    const metode = document.querySelector('input[name="bayar"]:checked').value;

    if(nama=="" || meja==""){

        alert("Silakan lengkapi Nama dan Nomor Meja!");
        return;

    }

    // Nomor order otomatis
    const order = "VC" + Date.now();

    // Simpan data pesanan
   localStorage.setItem("lastOrder", JSON.stringify({

    order: order,
    nama: nama,
    meja: meja,
    catatan: catatan,
    metode: metode.toUpperCase(),
    cart: cart,
    subtotal: subtotal,
    ppn: ppn,
    total: total

}));

    // Hapus keranjang
    localStorage.removeItem("cart");

    // Pindah ke halaman sukses
    window.location.href = "success.php";

}
</script>

</body>
</html>