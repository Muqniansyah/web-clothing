const mainMenu = document.querySelector(".mainMenu");
const closeMenu = document.querySelector(".closeMenu");
const openMenu = document.querySelector(".openMenu");
const listMainMenu = document.querySelectorAll("li");

openMenu.addEventListener("click", show);
closeMenu.addEventListener("click", close);
listMainMenu[0].addEventListener("click", close);
listMainMenu[1].addEventListener("click", close);
listMainMenu[2].addEventListener("click", close);
listMainMenu[3].addEventListener("click", close);

function show() {
  mainMenu.style.display = "flex";
  mainMenu.style.top = "0";
}

function close() {
  mainMenu.style.top = "-100%";
}

// shopping cart

const product = [
  {
    id: 0,
    image: "assets/img/products/product.jpg",
    title: "Brown Jaket",
    price: 400,
  },
  {
    id: 1,
    image: "assets/img/products/product-2.jpeg",
    title: "crewneck manhattan",
    price: 220,
  },
  {
    id: 2,
    image: "assets/img/products/product-3.jpeg",
    title: "crewneck new york",
    price: 240,
  },
  {
    id: 3,
    image: "assets/img/products/product-4.jpeg",
    title: "hoodie black mamba",
    price: 300,
  },
  {
    id: 3,
    image: "assets/img/products/product-5.jpeg",
    title: "bomber night",
    price: 500,
  },
  {
    id: 3,
    image: "assets/img/products/product-6.jpeg",
    title: "hoodie yahudi",
    price: 320,
  },
  {
    id: 3,
    image: "assets/img/products/product-7.jpeg",
    title: "kemeja kotak",
    price: 240,
  },
  {
    id: 3,
    image: "assets/img/products/product-8.jpeg",
    title: "kaos higher",
    price: 150,
  },
];

const categories = [
  ...new Set(
    product.map((item) => {
      return item;
    })
  ),
];

let i = 0;

document.getElementById("root").innerHTML = categories
  .map((item) => {
    let { image, title, price } = item;
    return (
      `<div class='box'>
			  <div class='img-box'>
				  <img class='images' src='${image}'></img>
			  </div>
			  <div class='bottom'>
				  <p>${title}</p>
				  <h2>$ ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      i++ +
      ")'>Add to cart</button>" +
      `</div>
		   </div>`
    );
  })
  .join("");

let cart = [];

function addtocart(a) {
  cart.push({ ...categories[a] });
  displayCart();
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
        return (
          `<div class='cart-item'>
					  <div class='row-img'>
						  <img class='rowimg' src='${image}'></img>
					  </div>
					  <p style='font-size:12px;'>${title}</p>
					  <h2 style='font-size:15px;'>$ ${price}.00</h2>` +
          "<i class='bi bi-trash' onclick='delElement(" +
          j++ +
          ")'></i></div>"
        );
      })
      .join("");
  }
}

// search
document.getElementById("searchBar").addEventListener("keyup", (e) => {
  const searchData = e.target.value.toLowerCase();
  const filterData = product.filter((item) => {
    return item.title.toLowerCase().includes(searchData);
  });
  displayItem(filterData);
});

const displayItem = (items) => {
  document.getElementById("root").innerHTML = items
    .map((item) => {
      let { image, title, price } = item;
      return `<div class="box">
                  <div class="img-box">
                      <img class="images" src=${image}></img>
                  </div>
                  <div class="bottom">
                      <p>${title}</p>
                      <h2>$ ${price}.00</h2>
                      <button>Add to cart</button>
                  </div>
              </div>`;
    })
    .join("");
};

// akhir search

// wishlist
// let iconCart = document.querySelector(".iconCart");
// let cartside = document.querySelector(".cart");
// let container = document.querySelector(".container");
// let close = document.querySelector(".buttons .close");

// iconCart.addEventListener("click", () => {
//   if (cartside.style.right == "-100%") {
//     cartside.style.right = "0";
//     container.style.transform = "translateX(-400px)";
//   } else {
//     cartside.style.right = "-100%";
//     container.style.transform = "translateX(0)";
//   }
// });
