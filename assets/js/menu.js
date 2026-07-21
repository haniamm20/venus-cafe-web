const menu = [

{nama:"Espresso",harga:18000,gambar:"assets/images/espresso.png",kategori:"coffee"},
{nama:"Americano",harga:22000,gambar:"assets/images/americano.png",kategori:"coffee"},
{nama:"Latte",harga:25000,gambar:"assets/images/latte.png",kategori:"coffee"},
{nama:"Cappuccino",harga:23000,gambar:"assets/images/cappuccino.png",kategori:"coffee"},
{nama:"Mocha",harga:28000,gambar:"assets/images/mocha.png",kategori:"coffee"},
{nama:"Caramel Latte",harga:30000,gambar:"assets/images/caramel-latte.png",kategori:"coffee"},
{nama:"Vanilla Latte",harga:30000,gambar:"assets/images/vanilla-latte.png",kategori:"coffee"},
{nama:"Hazelnut Latte",harga:32000,gambar:"assets/images/hazelnut-latte.png",kategori:"coffee"},

{nama:"Matcha Latte",harga:28000,gambar:"assets/images/matcha.png",kategori:"drink"},
{nama:"Chocolate",harga:27000,gambar:"assets/images/chocolate.png",kategori:"drink"},
{nama:"Red Velvet",harga:28000,gambar:"assets/images/redvelvet.png",kategori:"drink"},
{nama:"Thai Tea",harga:24000,gambar:"assets/images/thai-tea.png",kategori:"drink"},
{nama:"Taro Latte",harga:27000,gambar:"assets/images/taro.png",kategori:"drink"},

{nama:"Beef Burger",harga:42000,gambar:"assets/images/beef-burger.png",kategori:"food"},
{nama:"Chicken Burger",harga:38000,gambar:"assets/images/chicken-burger.png",kategori:"food"},
{nama:"Club Sandwich",harga:35000,gambar:"assets/images/club-sandwich.png",kategori:"food"},
{nama:"Spaghetti Bolognese",harga:39000,gambar:"assets/images/spaghetti.png",kategori:"food"},
{nama:"Nasi Goreng Special",harga:35000,gambar:"assets/images/nasgor.png",kategori:"food"},

{nama:"French Fries",harga:22000,gambar:"assets/images/fries.png",kategori:"snack"},
{nama:"Chicken Wings",harga:30000,gambar:"assets/images/wings.png",kategori:"snack"},
{nama:"Onion Rings",harga:23000,gambar:"assets/images/onion-rings.png",kategori:"snack"},
{nama:"Chicken Nugget",harga:25000,gambar:"assets/images/nugget.png",kategori:"snack"},

{nama:"Croissant",harga:22000,gambar:"assets/images/croissant.png",kategori:"dessert"},
{nama:"Brownies",harga:25000,gambar:"assets/images/brownies.png",kategori:"dessert"},
{nama:"Cheesecake",harga:32000,gambar:"assets/images/cheesecake.png",kategori:"dessert"}

];

const semuaMenu = document.getElementById("semuaMenu");

function tampilMenu(data){

    semuaMenu.innerHTML = "";

    data.forEach(item=>{

        semuaMenu.innerHTML += `

        <div class="col-lg-3 col-md-6">

            <div class="card menu-card shadow h-100">

                <img src="${item.gambar}" class="card-img-top" alt="${item.nama}">

                <div class="card-body text-center">

                    <span class="badge bg-warning text-dark mb-2">
                        ${item.kategori.toUpperCase()}
                    </span>

                    <h5>${item.nama}</h5>

                    <h4 class="text-warning">
                        Rp${item.harga.toLocaleString("id-ID")}
                    </h4>

                    <button
                    type="button"
                    class="btn btn-warning w-100"
                    onclick="tambahKeranjang('${item.nama}', ${item.harga}); return false;">

                    🛒 Tambah

                    </button>

                    <a href="detail-menu.php"
                    class="btn btn-outline-dark w-100 mt-2">

                    Lihat Detail

                    </a>

                </div>

            </div>

        </div>

        `;

    });

}

tampilMenu(menu);

// ================= FILTER =================

document.querySelectorAll(".filter-btn").forEach(btn=>{

    btn.addEventListener("click",()=>{

        document.querySelectorAll(".filter-btn").forEach(b=>b.classList.remove("active"));

        btn.classList.add("active");

        const kategori=btn.dataset.filter;

        if(kategori==="all"){

            tampilMenu(menu);

        }else{

            tampilMenu(menu.filter(item=>item.kategori===kategori));

        }

    });

});

// ================= SEARCH =================

const search=document.getElementById("searchMenu");

if(search){

search.addEventListener("keyup",()=>{

    const keyword=search.value.toLowerCase();

    tampilMenu(menu.filter(item=>

        item.nama.toLowerCase().includes(keyword)

    ));

});

}

// ================= CART =================

let cart = JSON.parse(localStorage.getItem("cart")) || [];

tampilkanCart();

function tambahKeranjang(nama, harga){

    const item = cart.find(i => i.nama === nama);

    if(item){
        item.jumlah++;
    }else{
        cart.push({
            nama:nama,
            harga:harga,
            jumlah:1
        });
    }

    tampilkanCart();

}
function tampilkanCart(){

    const cartItems=document.getElementById("cartItems");

    const cartTotal=document.getElementById("cartTotal");

    if(!cartItems || !cartTotal) return;

    cartItems.innerHTML="";

    let total=0;

    if(cart.length===0){

        cartItems.innerHTML="<p class='text-muted'>Keranjang masih kosong</p>";

    }

    cart.forEach((item,index)=>{

        total+=item.harga*item.jumlah;

        cartItems.innerHTML+=`

        <div class="border-bottom pb-2 mb-2">

            <strong>${item.nama}</strong><br>

            Rp${item.harga.toLocaleString("id-ID")} × ${item.jumlah}

            <div class="mt-2">

                <button class="btn btn-danger btn-sm"
                onclick="kurangItem(${index})">-</button>

                <button class="btn btn-success btn-sm"
                onclick="tambahItem(${index})">+</button>

            </div>

        </div>

        `;

    });

    cartTotal.innerHTML="Rp"+total.toLocaleString("id-ID");

    localStorage.setItem("cart", JSON.stringify(cart));

}

function tambahItem(index){

    cart[index].jumlah++;

    tampilkanCart();

}

function kurangItem(index){

    cart[index].jumlah--;

    if(cart[index].jumlah<=0){

        cart.splice(index,1);

    }

    tampilkanCart();

}

window.tambahKeranjang = tambahKeranjang;
window.tambahItem = tambahItem;
window.kurangItem = kurangItem;
window.checkout = checkout;

function checkout(){

    if(cart.length === 0){

        alert("Keranjang masih kosong!");
        return;

    }

    // Simpan keranjang ke localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Pindah ke halaman payment
    window.location.href = "payment.php";

}
window.checkout = checkout;

console.log("checkout siap");

// ================= DETAIL PEMBAYARAN =================
document.querySelectorAll('input[name="bayar"]').forEach(radio => {

    radio.addEventListener("change", showPaymentDetail);

});

function showPaymentDetail(){

    const metode=document.querySelector('input[name="bayar"]:checked').value;

    const detail=document.getElementById("detailPembayaran");

    if(metode==="tunai"){

        detail.innerHTML=`

        <div class="payment-cash">

            <h5>💵 Pembayaran Tunai</h5>

            <p>
            Silakan melakukan pembayaran langsung di kasir.
            </p>

        </div>

        `;

    }

    else if(metode==="qris"){

     detail.innerHTML=`

        <div class="payment-qris">

        <h4>📱 Scan QRIS</h4>

        <img src="assets/images/qris-demo.png"
        class="img-fluid"
        style="width:240px;display:block;margin:auto;">

        <p class="mt-3">
        Scan menggunakan aplikasi Dana, OVO, GoPay, ShopeePay, atau Mobile Banking.
        </p>

    </div>

`   ;

    }

    else{

        detail.innerHTML=`

        <div class="payment-transfer">

            <h4>🏦 Transfer Bank</h4>

            <div class="bank-box">

                <img src="assets/images/bca.png">

                <h5>BCA</h5>

                <div class="bank-number" id="rekening">
                    1234567890
                </div>

                <div class="bank-name">
                    a.n. VENUS CAFE
                </div>

                <button
                class="btn btn-primary copy-btn"
                onclick="copyRekening()">

                📋 Salin Nomor Rekening

                </button>

            </div>

        </div>

        `;

    }

}

showPaymentDetail();

function copyRekening(){

    navigator.clipboard.writeText("1234567890");

    alert("Nomor rekening berhasil disalin!");

}
