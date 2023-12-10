//Toggle class active untuk hamburger menu
const navbarNav = document.querySelector(".navbar-nav");
//ketika hamburger menu diklik
document.querySelector("#hamburger-menu").onclick = (e) => {
  navbarNav.classList.toggle("active");
  e.preventDefault();
};

// logo animation
let ubahTeks = document.getElementsByClassName("text");
// setTimeout jalankan kode setelah waktu tertentu. setInterval jalankan kode beberapa kali / berulang.
setInterval(function () {
  ubahTeks[0].style.color = "#313fbb";
  setTimeout(function () {
    ubahTeks[0].style.color = "black";
  }, 500);
}, 1000);

// background transition slider
let start = 0;
otomatis();

function otomatis() {
  const slidersImg = document.querySelectorAll(".slider");

  for (let i = 0; i < slidersImg.length; i++) {
    slidersImg[i].style.display = "none";
  }

  if (start >= slidersImg.length) {
    start = 0;
  }

  slidersImg[start].style.display = "block";
  console.log("gambar ke" + start);
  start++;

  setTimeout(otomatis, 2000);
}

// about teks
window.addEventListener("scroll", muncul);

function muncul() {
  let elements = document.querySelectorAll(".elemen");

  for (let i = 0; i < elements.length; i++) {
    let tinggiLayar = window.innerHeight;

    let jarakAtasElemen = elements[i].getBoundingClientRect().top;

    let ukuranScroll = 300;

    if (jarakAtasElemen < tinggiLayar - ukuranScroll) {
      elements[i].classList.add("muncul");
    } else {
      elements[i].classList.remove("muncul");
    }
  }
}

// faq
const faqs = document.querySelectorAll(".faqCart");

faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});

// shopping cart
const product = [
  {
    id: 0,
    image: "../assets/img/products/product.jpg",
    title: "Brown Jaket",
    price: 400,
  },
  {
    id: 1,
    image: "../assets/img/products/product-2.jpeg",
    title: "manhattan",
    price: 220,
  },
  {
    id: 2,
    image: "../assets/img/products/product-3.jpeg",
    title: "new york",
    price: 240,
  },
  {
    id: 3,
    image: "../assets/img/products/product-4.jpeg",
    title: "black hoodie",
    price: 300,
  },
  {
    id: 4,
    image: "../assets/img/products/product-5.jpeg",
    title: "bomber night",
    price: 500,
  },
  {
    id: 5,
    image: "../assets/img/products/product-6.jpeg",
    title: "hoodie squid",
    price: 320,
  },
  {
    id: 6,
    image: "../assets/img/products/product-7.jpeg",
    title: "kemeja kotak",
    price: 240,
  },
  {
    id: 7,
    image: "../assets/img/products/product-8.jpeg",
    title: "kaos higher",
    price: 150,
  },
];

const categories = [...new Set(product)];

let i = 0;

document.getElementById("root").innerHTML = categories
  .map((item) => {
    let { image, title, price } = item;
    return `<div class='box'>
            <div class='img-box'>
              <img class='images' src='${image}'></img>
            </div>
            <div class='bottom'>
              <p>${title}</p>
              <h2>$ ${price}.00</h2>
              <button onclick='addtocart(${i++})'>Add</button>
            </div>
          </div>`;
  })
  .join("");

let cart = [];

function addtocart(a) {
  cart.push({ ...categories[a], quantity: 1 });
  document.cookie =
    "cart=" +
    JSON.stringify(cart) +
    "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
  displayCart();
}

function redirectToCheckout() {
  window.location.href = "./checkout.html";
}

function delElement(a) {
  cart.splice(a, 1);
  displayCart();
}

function displayCart(a) {
  let j = 0;
  let total = 0;

  document.getElementById("count").innerHTML = cart.length;

  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "$ " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        let { image, title, price } = items;
        total = total + price;
        document.getElementById("total").innerHTML = `$ ${total}.00`;
        return `<div class='cart-item'>
                <div class='row-img'>
                  <img class='rowimg' src='${image}'></img>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size:15px;'>$ ${price}.00</h2>
                <i class='bi bi-trash' onclick='delElement(${j++})'></i>
              </div>`;
      })
      .join("");
  }
}

function displayItem(items) {
  document.getElementById("root").innerHTML = items
    .map((item, index) => {
      let { image, title, price } = item;
      return `<div class="box">
                    <div class="img-box">
                        <img class="images" src=${image}></img>
                    </div>
                    <div class="bottom">
                        <p>${title}</p>
                        <h2>$ ${price}.00</h2>
                        <button onclick='addtocart(${index})'>Add to cart</button>
                    </div>
                </div>`;
    })
    .join("");
}

document.getElementById("searchBar").addEventListener("keyup", (e) => {
  const searchData = e.target.value.toLowerCase();
  const filterData = product.filter((item) => {
    return item.title.toLowerCase().includes(searchData);
  });
  displayItem(filterData);
});

displayItem(categories);
