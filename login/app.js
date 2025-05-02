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

      },
      {
        code: "green",
        img: "./img/15green.png",
      },
    ],
    sizes:[
        {
           size:"128gb",
           price: 69999 , 
        },
        {
            size:"256gb",
            price:74899,
        },
        {
            size:"512gb",
            price:94899,
        }
    ]
  },
  {
    id: 2,
    title: "iphone 15 pro",
    //price: 200,
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
    sizes:[
        {
           size:"128gb",
           price:127899, 
        },
        {
            size:"256gb",
            price:137899,
        },
        {
            size:"512",
            price:158890,
        }
    ]
  },
  {
    id: 3,
    title: "Iphone",
    //price: 109,

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
    sizes:[
        {
           size:"128gb",
           price: 56899 , 
        },
        {
            size:"256gb",
            price:68899,
        },
        {
            size:"512gb",
            price:88888,
        }
    ]
  },
  {
    id: 4,
    title: "Iphone 14 Pro",
    //price: 129,

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
    sizes:[
        {
           size:"128gb",
           price: 119899 , 
        },
        {
            size:"256gb",
            price:129899,
        },
        {
            size:"512bg",
            price:149899,
        }
    ]
  },
  {
    id: 5,
    title: "Iphone 13",
    //price: 99,
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
    sizes:[
        {
           size:"128bg",
           price: 52899 , 
        },
        {
            size:"256gb",
            price:62899,
        },
        {
            size:"512gb",
            price:82899,
        }
    ]
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");
const currentProductDescription =document.querySelectorAll(".desc");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    //currentProductPrice.textContent = "$" + choosenProduct.price;
   // currentProductDescription.textContent=choosenProduct.desc;
   currentProductDescription.textContent=choosenProduct.desc;
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
  });
});

/*
currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
      currentProductPrice.textContent ="₹" + choosenProduct.colors[index].price;
    });
  });
  */
/*
  currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
      currentProductDesc.textContent = choosenProduct.colors[index].desc;
    });
  });*/
  currentProductSizes.forEach((size,index)=>{
    size.addEventListener("click", ()=>{
        currentProductPrice.textContent="₹" +choosenProduct.sizes[index].price;
    });
  }) ;
    

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


// Function to validate email address
function isValidEmail(email) {
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to handle subscription
function subscribe() {
  var email = document.getElementById('emailInput').value.trim();

  if (!isValidEmail(email)) {
      alert('Please enter a valid email address.');
      return;
  }

  // You can replace this part with your actual subscription logic
  console.log('Subscribing user with email:', email);

  // Hide the subscription form
  document.querySelector('.subscribe-form').style.display = 'none';
  // Show the confirmation message
  document.getElementById('confirmationMessage').style.display = 'block';

  for (var i = 0; i < 20; i++) {
    setTimeout(createFirework, i * 100);
}
}

document.getElementById('subscribebutton').addEventListener('click,subscribe');

// Subscribe button click event listener
     //document.getElementById('fButton').addEventListener('click',join);