let listCart = [];

function checkCart() {
  var cookieValue = document.cookie
    .split("; ")
    .find((row) => row.startsWith("cart="));
  if (cookieValue) {
    listCart = JSON.parse(cookieValue.split("=")[1]);
  } else {
    listCart = [];
  }
}

//new
function getCartFromCookie() {
  var cookieValue = document.cookie
    .split("; ")
    .find((row) => row.startsWith("cart="));
  if (cookieValue) {
    return JSON.parse(cookieValue.split("=")[1]);
  } else {
    return [];
  }
}

function addCartToHTML() {
  let listCartHTML = document.querySelector(".returnCart .list");
  listCartHTML.innerHTML = "";

  let totalQuantityHTML = document.querySelector(".totalQuantity");
  let totalPriceHTML = document.querySelector(".totalPrice");
  let totalQuantity = 0;
  let totalPrice = 0;

  listCart = getCartFromCookie();

  if (listCart) {
    listCart.forEach((product) => {
      if (product) {
        let newCart = document.createElement("div");
        newCart.classList.add("item");
        newCart.innerHTML = `<img src="${product.image}">
          <div class="info">
              <div class="name">${product.title}</div>
              <div class="price">$${product.price.toFixed(2)}/1 product</div>
          </div>
          <div class="quantity">${product.quantity}</div>
          <div class="returnPrice">$${(
            product.price * product.quantity
          ).toFixed(2)}</div>`;
        listCartHTML.appendChild(newCart);
        totalQuantity = totalQuantity + product.quantity;
        totalPrice = totalPrice + product.price * product.quantity;
      }
    });
  }

  totalQuantityHTML.innerText = totalQuantity;
  totalPriceHTML.innerText = "$" + totalPrice.toFixed(2);
}

function checkout() {
  // Logika checkout sesuai kebutuhan Anda
  alert(
    "Pembelian Berhasil, Terimakasih Sudah Berbelanja di Toko Kami.. Salam Hunt Cloth's"
  );
  var formElements = document.querySelectorAll(".form input");
  formElements.forEach((element) => (element.value = ""));

  // Lakukan logika checkout lainnya jika diperlukan

  // Contoh: Mengosongkan keranjang dan kembali ke halaman utama
  listCart = [];
  document.cookie =
    "listCart=" +
    JSON.stringify(listCart) +
    "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
  window.location.href = "./home.php";
}

checkCart();
addCartToHTML();
