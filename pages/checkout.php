<!--Mengambil data username dari sesion-->
<?php
session_start();

// Ambil username dari sesi
$username = @$_SESSION['username'];

// Periksa apakah username ada
if (empty($username)) {
    // Jika tidak, mungkin perlu mengarahkan pengguna ke halaman login atau halaman lain
    header('Location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT</title>
    <!--<script type="text/javascript" src="checkout.js"></script>-->
    <link rel="stylesheet" href="../assets/styles/checkout.css">
    
    <script type="text/javascript">
        function berhasilbayar() {
            alert("Pembelian Berhasil, Terimakasih Sudah Berbelanja di Toko Kami.. Salam Hunt Cloth's");
            var formElements = document.querySelectorAll('.form input');
            formElements.forEach(element => element.value = '');

            //kembali ke awal index
            window.location.href = './home.php';
        }
    </script>
    <!-- my css -->
    <style>
      <?php include '../assets/styles/checkout.css'; ?>
    </style>
</head>
<body>
    
<div class="container">
    <div class="checkoutLayout">

        <div class="returnCart">
            <!--<a href="/">keep shopping</a>-->
            <h2 class="blinking-text">Hallo <?php echo $username; ?></h2>
            <h1>Product in Cart</h1>
            <div class="list">
                <!-- Daftar produk yang akan ditampilkan -->
                <!--<div class="item">
                    <img src="../assets/img/products/product.jpg" alt="Product Image">
                    <div class="info">
                        <div class="name">PRODUCT 1</div>
                        <div class="price">$50/1 product</div>
                    </div>
                    <div class="quantity">12</div>
                    <div class="returnPrice">$543.21</div>
                </div>-->

                <!-- Daftar produk yang akan ditampilkan -->
                    <div class="checkout-item" data-name="PRODUCT 1" data-price="50" data-image="../assets/img/products/product.jpg">
                    <img src="../assets/img/products/product.jpg" alt="Product Image">
                     <div class="info">
                          <div class="name">PRODUCT 1</div>
                         <div class="price">$50/1 product</div>
                    </div>
                     <div class="quantity">0</div>
                      <div class="returnPrice">$0</div>
            </div>


                <!-- Anda dapat menambahkan item lainnya di sini -->
            </div>
        </div>

        <div class="right">
            <h1>Checkout</h1>

            <div class="form">
                <!--<div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>-->
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your address">
                </div>

                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
                </div>
            </div>

            <div class="return">
                <div class="row">
                    <div>Total Quantity</div>
                    <div class="totalQuantity">123</div>
                </div>
                <div class="row">
                    <div>Total Price</div>
                    <div class="totalPrice">$1000</div>
                </div>
            </div>
            
            <button class="buttonCheckout" onclick="berhasilbayar()" value="Panggil">Bayar</button>
        </div>
    </div>
</div>

<!-- Container untuk menampilkan produk yang akan dibeli -->
<!--<div id="checkout-container"></div>-->

    <script>
      <?php include '../assets/script/checkout.js'; ?>
    </script>
    <script src="../assets/script/checkout.js"></script>

</body>
</html>
