<a?php
session_start();
include("connect.php");

?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Iphone Store</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="./img/apple1.png" alt="">
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/search.png" width="20" height="20" alt="" class="searchIcon">
                </div>
            </div
            <div class="navItem">
                <span class="limitedOffer">Limited Offer!</span>
                
            </div>
            <div class="navItem">
            <p style="margin-left:86%; margin-top:1% ;">
            <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['email'];
        }
       }
       ?>

            <a href="logout.php">Logout</a>
            </p>

             </div>
        </div>
    </div>
        <div class="navBottom">
            <h3 class="menuItem">Iphone 15</h3>
            <h3 class="menuItem">Iphone 15 pro</h3>
            <h3 class="menuItem">Iphone 14</h3>
            <h3 class="menuItem">Iphone 14 pro</h3>
            <h3 class="menuItem">Iphone 13</h3>
        </div>

    </nav>
    
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/iphone_15.png" width="40%"alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 15</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹69,999</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/iphone_15pro_white.png" width="40%" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 15pro</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹1,27,899</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/14purple.png"width=40% alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone14</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹56,899</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/14promaxgold.png"width="30%" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 14 pro</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹1,19,899</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/13green.png"width="40%" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Iphone 13</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹52,899</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>
    <video autoplay loop muted src="https://www.apple.com/105/media/ww/iphone/family/2024/1efec3e0-8619-4684-a57e-6e2310394f08/anim/welcome/xlarge.mp4" width="100%"></video>
   
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/iphone_15.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Iphone 15</h1>
            <h2 class="productPrice">₹69,999</h2>
            <p class="productDesc"><bold>About this item</bold><br><br><br>
            <>
            <ul class="disc">
                    <li>DYNAMIC ISLAND COMES TO IPHONE— Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else. You can see who’s calling, track your next ride, check your flight status, and so much more.</li>

                    <li>INNOVATIVE DESIGN — iPhone features a durable color-infused glass and aluminum design. It’s splash, water, and dust resistant. The Ceramic Shield front is tougher than any smartphone glass. And the 6.1" Super Retina XDR display is up to 2x brighter in the sun compared to iPhone with other iphones.
48MP MAIN CAMERA WITH 2X TELEPHOTO — The 48MP Main camera shoots in super-high resolution. So it’s easier than ever to take standout photos with amazing detail. The 2x optical-quality Telephoto lets you frame the perfect close-up.</li>
<li>NEXT-GENERATION PORTRAITS — Capture portraits with dramatically more detail and color. Just tap to shift the focus between subjects — even after you take the shot.</li>
<li>POWERHOUSE A16 BIONIC CHIP — The superfast chip powers advanced features like computational photography, fluid Dynamic Island transitions, and Voice Isolation for phone calls. And A16 Bionic is incredibly efficient to help deliver great all-day battery life.</li></o>
                .</ul></p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">128gb</div>
                <div class="size">256gb</div>
                <div class="size">512gb</div>
            </div>
            <button class="productButton">BUY NOW!</button>
        </div>
        <div class="payment"> 
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+1 234 5678" class="payInput">
            <!---
            <label>Door No</label>
            <input type="text" placeholder="Door No" class="payInput"> -->
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton"   onclick="openPopup()">Checkout!</button>
            <div class="popup" id="popup">
                <img src="./img/tick.jpg">
                <h2>Thank you!</h2>
                <p>Your order is placed successfully!!</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
            <span class="close">X</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="https://www.apple.com/in/iphone-15-pro/images/overview/ecosystem/airpods__ew23qced7pkm_large.jpg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <video loop autoplay muted src="https://www.apple.com/105/media/us/iphone-15/2023/434c1226-dcdc-47be-ae28-6cb67a3a5a7c/anim/highlights-glass/large.mp4"
                alt="" class="galleryImg"></video>
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="https://www.apple.com/v/iphone-15/c/images/overview/dynamic-island/dynamic_island_hw__bq0da9ahwxpy_large.png"
                alt="" class="galleryImg">
                
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <video autoplay loop muted src="https://www.apple.com/105/media/us/iphone-15/2023/434c1226-dcdc-47be-ae28-6cb67a3a5a7c/anim/shift-focus/large.mp4" class="nsvid" width="130%"></video>
                <!--alt="" class="nsImg">-->
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">IPHONE NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <video autoplay loop muted src="https://www.apple.com/105/media/us/iphone-15/2023/434c1226-dcdc-47be-ae28-6cb67a3a5a7c/anim/chip/large.mp4" width="140%"></video>
                <!--alt="" class="nsImg">-->
        </div>
    </div>
    <video autoplay loop muted src="https://www.apple.com/105/media/ww/iphone/family/2024/1efec3e0-8619-4684-a57e-6e2310394f08/anim/welcome/xlarge.mp4" class="lastvid" width="100%"></video>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">iphone 15</li>
                    <li class="fListItem">iphone 15pro</li>
                    <li class="fListItem">iphone 14</li>
                    <li class="fListItem">iphone 14 pro</li>
                    <li class="fListItem">iphone 13</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="subscribe-from">
                    <input id="emailInput" type="email" placeholder="your@email.com" class="fInput">
                    <button class="subscribeButton" type="button">join</button>
                </div>
                <p id="confirmationMessage" style="display: none;">Thank you for subscribing to our newsletter!</p>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                  <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                   <a href="https://www.instagram.com/always_nayum/" target="blank"><img src="./img/instagram.png" alt="" class="fIcon"></a>
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@Nayum. All rights reserved. 2024.</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>

</html>
