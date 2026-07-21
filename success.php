<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pesanan Berhasil | VENUS CAFE</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-lg-6">

<div class="card shadow">

<div class="card-body text-center">

<h1 class="text-success">
✅ Pesanan Berhasil
</h1>

<p class="mt-3">
Terima kasih telah memesan di
<b>VENUS CAFE</b>.
</p>

<hr>

<p id="detailPesanan"></p>

<a href="index.php" class="btn btn-dark">
🏠 Kembali ke Home
</a>

<a href="menu.php" class="btn btn-warning">
☕ Pesan Lagi
</a>

</div>

</div>

</div>

</div>

</div>

<script>

const data = JSON.parse(localStorage.getItem("lastOrder"));

if(data){

let menu = "";

data.cart.forEach(item=>{

menu += `
<tr>
<td>${item.nama}</td>
<td>${item.jumlah}</td>
<td>Rp${(item.harga*item.jumlah).toLocaleString("id-ID")}</td>
</tr>
`;

});

document.getElementById("detailPesanan").innerHTML = `

<h5>No Order</h5>
<p>${data.order}</p>

<p><b>Nama :</b> ${data.nama}</p>
<p><b>Meja :</b> ${data.meja}</p>
<p><b>Pembayaran :</b> ${data.metode}</p>

<hr>

<table class="table">

<thead>

<tr>

<th>Menu</th>
<th>Qty</th>
<th>Total</th>

</tr>

</thead>

<tbody>

${menu}

</tbody>

</table>

<hr>

<p><b>Subtotal :</b>
Rp${data.subtotal.toLocaleString("id-ID")}</p>

<p><b>PPN :</b>
Rp${data.ppn.toLocaleString("id-ID")}</p>

<h4 class="text-success">
Total : Rp${data.total.toLocaleString("id-ID")}
</h4>

<hr>

<h5>📶 Informasi WiFi</h5>

<p><b>SSID :</b> VENUS CAFE</p>

<p><b>Password :</b> ownervenusganteng</p>

<p class="text-muted">
Terima kasih telah berkunjung 😊
</p>

`;

}

</script>

</body>
</html>