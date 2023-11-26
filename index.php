<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Baju.</title>
    <!-- bootstrap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- my css -->
    <style>
      <?php include './assets/styles/rill.css'; ?>
    </style>
  </head>
  <body>
    <!-- navbar and jumbotron :start-->
    <header>
      <div class="jumbotron">
        <h1>Toko Baju.</h1>
        <p>Menyediakan baju baju.</p>
      </div>
      
      <nav>
        <div class="logo"><h1>Toko Baju.</h1></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
          <ul class="mainMenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#"><i class="bi bi-bag"></i></a></li>
            <li><p id="count">0</p></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <div class="iconCart">
              <i class="bi bi-bag-heart"></i>
              <div class="totalQuantity">0</div>
            </div>
          </ul>
      </nav>
    </header>
    <!-- navbar and jumbotron :end  -->
    
    <!-- search bar :start-->
    <div class="searchContent">
          <div class="searchbar">
            <input
              placeholder="Search..."
              id="searchBar"
              name="search"
              type="text"
            />
            <i class="bi bi-search hover"></i>
          </div>
    </div>
    <!-- search bar :end  -->

    <!-- shopping menu :start-->
    <main>
      <div class="container">
        <div id="root"></div>
        <div class="sidebar">
          <div class="head">
            <p>My Cart</p>
          </div>
          <div id="cartItem">Your Cart Is Empty</div>
          <div class="foot">
            <h3>Total</h3>
            <h2 id="total">$ 0.00</h2>
          </div>
          <a href="./pages/checkout.php">klik</a>
        </div>
      </div>
    </main>
    <!-- shopping menu :end -->

    <div class="cart">
      <h2>CART</h2>
      <div class="listCart">
        <div class="item">
          <img src="./img/kaos.jpg" alt="" />
          <div class="content">
            <div class="name">Product Name</div>
            <div class="price">$50/1 product</div>
          </div>
          <div class="quantity">
            <button>-</button>
            <span class="value">3</span>
            <button>+</button>
          </div>
        </div>
      </div>

      <div class="buttons">
        <div class="close">CLOSE</div>
        <div class="checkout">
          <a href="./checkout.html"> CHECKOUT </a>
        </div>
      </div>
    </div>

    <!-- contact and footer -->
    <footer>
      <p> &#169; web baju</p>
    </footer>

    <!-- fontawesome js-->
    <script src="https://kit.fontawesome.com/7397d5904a.js" crossorigin="anonymous"></script>
    <script>
      <?php include './assets/script/script.js'; ?>
    </script>
  </body>
</html>