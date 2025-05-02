const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "IPhone 15",
    //price: 197,
   
    colors: [
      {
        code: "black",
        img: "./img/iphone_15.png",
        desc: "hello",
       

      },
      {
        code: "green",
        img: "./img/15green.png",
        price: 200,

        desc:"helllo"
      },
    ],
  },
  {
    id: 2,
    title: "iphone 15 pro",
    price: 200,
    desc:"hellooooo",
    colors: [
      {
        code: "white",
        img: "./img/iphone_15pro_white.png",
      },
      {
        code: "darkblue",
        img: "./img/15problue.png",
      },
    ],
  },
  {
    id: 3,
    title: "Iphone",
    price: 109,
    desc:"heloooooooooooooooooooo",

    colors: [
      {
        code: "purple",
        img: "./img/14purple.png",
      },
      {
        code: "red",
        img: "./img/14red.png",
      },
    ],
  },
  {
    id: 4,
    title: "Iphone 14 Pro",
    price: 129,
    desc:"hiiiiiiiiiiii",
    colors: [
      {
        code: "silver",
        img: "./img/14prosilver.png",
      },
      {
        code: "gold",
        img: "./img/14progold.png",
      },
    ],
  },
  {
    id: 5,
    title: "Iphone 13",
    price: 99,
    desc:"helllllllo",
    colors: [
      {
        code: "darkgreen",
        img: "./img/13green.png",
      },
      {
        code: "pink",
        img: "./img/13pink.png",
      },
    ],
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductDesc=document.querySelectorAll(".product-desc");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");

//const surrentProductDesc =document.querySelector(".productDesc");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent = "$" + choosenProduct.price;
   // currentProductDesc.textContext =choosenProduct.desc;
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});

currentProductColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
    currentProductDesc.textContect=choosenProduct.colors[index].desc;
  });
});


currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
      currentProductPrice.textContent ="₹" + choosenProduct.colors[index].price;
      
    });
  });

currentProductSizes.forEach((size,index) => {
  size.addEventListener("click", () => {
    currentProductSizes.forEach((size) => {
      size.style.backgroundColor = "white";
      size.style.color = "black";
    });
    size.style.backgroundColor = "black";
    size.style.color = "white";
  });
});
let popup = document.getElementById("popup");
function openPopup(){
  popup.classList.add("open-popup");
}
function closePopup(){
  popup.classList.remove("open-popup");
}

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");
//const popup = document.querySelector("")


productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});