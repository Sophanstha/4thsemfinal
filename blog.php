<?php
require "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="main">
        <div class="nav">
            <div class="uppernav">
                <h4 class="left">Email us : helloworld@gamil.com</h4>
                <h4>FREE WORLDWIDE SHIPPING ON ALL ORDERS OVER $50</h4>
                <h4 class="right">CALL US: 977 9801556487</h4>
            </div>
        <div class="lowernav">
            <div class="social">
               <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <img src="mylogo.jpg" alt="">
            <div class="icon">
              <input type="text" class="search">
              <button class="serch-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
             <button class="search-close"><i class="fa-solid fa-x"></i></button>
             <?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    
    echo '
    <p id="log" onclick="logout()" style="display:inline; font-size: 25px; font-weight: bold">' . $_SESSION["name"] . '</p>
    ';
    // echo '<p id="username"> sophan </p>';
    // echo '<p id="username" style="display:inline; font-size: 25px; font-weight: bold" > $_SESSION["name"]</p>';
    // echo '<a href="logout.php"><i class="fa-solid fa-user" id="log" style="color: red;"></i></a>';
} else {
    echo '<a href="login.php"><i class="fa-solid fa-user" id="log"></i></a>';
}
        ?>   
              
              <i class="fa-solid fa-cart-shopping">
         </i>
          </div>
        </div>
        <div class="lownav">
          <div class="shopitem">
          <h3 onclick="window.location.href='shop8.php'">male</h3>
            <h3 onclick="window.location.href='shop8.php'">female</h3>
          </div>
          <li><a  href="index.php">Home</a></li>
          <li><a href="shop8.php">Shop </a><i class="fa-solid fa-angle-down" id="down"></i>
          </li>
                <li><a class="home" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a  href="contact.php">Contact</a></li>
        </div>
        </div>      
          <div id="btitle">
            <h1>Blog / News</h1>
            <p>All The Latest Shopping News</p>
          </div>
          <div class="bnotice">
            <h1>Articles About Shoes</h1>
            <p>Blogs coming soon! Check back to see what's going on in the footwear industry. Whether you want to learn about the best shoes brands or how to get fitted for custom sized shoes, we've got you covered! Contact us today to speak with our staff at our full-service shoe store!</p>
            <button id="Send">Send us Message</button>
          </div>
          <div id="bnew">
            <div class="bshoenew">
                <img src="https://www.vanhoecks.com/assets/img/blog/how-to-find-shoes-when-you-have-wide-feet-grand-rapids-shoe-store.jpg">
                <h2>How To Find Shoes When You Have Wide Feet</h2>
                <p>Finding comfortable shoes when your feet are wider than the average might not be always an easy task. The shoes you can find in the stores are usually fit for feet of standard dimensions, and some models are just more comfortable for people with narrower feet. </p>
                <a href="blin1">Read more</a>                
              </div>

            <div class="bshoenew">
                <img src="https://www.vanhoecks.com/assets/img/blog/how-to-buy-shoes-if-your-feet-are-different-sizes.jpg">
                <h2>Buying Shoes If Your Feet Are Different Sizes</h2>
                <p>No two feet are alike. And, no, we are not talking here about different people with different foot lengths and widths. Even when it comes to the same person, there are often small differences between their feet. In fact, about 60% of the population.........</p>
                <a href="blin3">Read more</a>                
              </div>
            <div class="bshoenew">
              <img src="https://www.vanhoecks.com/assets/img/blog/how-to-find-the-best-work-shoes-for-wide-feet.jpg">
              <h2>Shoes That Will Make Your Feet Look Smaller</h2>
              <p>Most of the people that walk through our door are very self-conscious about the size of their feet. The first thing we tell them is that the average shoe size has increased by about two sizes since the 1970's and that their feet don't appear as big as they think.</p>
              <a href="blin2">Read more</a>                
              </div>
            <div class="bshoenew">
                <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHNob2VzfGVufDB8fDB8fHww" alt="" srcset="">
              <h2>Find The Best Work Shoes For Wide Feet</h2>
              <p>Finding the right shoe can be difficult for pretty much anyone, but if you also have wide feet, the process just got...</p>
              <a href="blin4">Read more</a>                
              </div>
            <div class="bshoenew">
              <img src="https://www.vanhoecks.com/assets/img/blog/how-to-shop-for-shoes-when-foot-size-is-uneven.jpg" alt="">
              <h2>How To Shop For Shoes with Uneven Feet</h2>
<p>Statistics show that only around 1% of the population has identical foot sizes, while around 80% of the US and other country...</p>
              <a href="blin5">Read more</a>                
              </div>
            <div class="bshoenew">
      <img src="https://cdncr.cyberchimps.com/chimpshoes/wp-content/uploads/sites/210/2022/06/post-10.jpg" alt="">
              <h2>Tricks To Avoid When Judging Shoe size</h2>
              <p>Picking the right shoe size is essential to the health of your feet. And there are several ways to know if you're wearing the right sized shoe...... </p>
              <a href="blin6">Read more</a>                
              </div>
            <div class="bshoenew">
      <img src="https://cdncr.cyberchimps.com/chimpshoes/wp-content/uploads/sites/210/2022/06/post-8.jpg" alt=""> 
              <h2>Finding The Right Shoe Width</h2>
            <p>Finding shoes that fit properly involves identifying the right length and width. It's usually quite easy to find shoes based on length, but knowing what shoe width you need will ensure shoes that are comfortable.</p>
              <a href="blin7">Read more</a>                
              </div>
            <div class="bshoenew">
              <img src="https://www.vanhoecks.com/assets/img/blog/all-about-wide-feet-shoe-store-grand-rapids.jpg">
              <h2>How To Tell If You Have Wide Feet</h2>
              <p>We spend so much of our day in shoes and on our feet. We are always on the go in our busy, go-getter society and there may not be anything more miserable than ill-fitting shoes.</p>
              <a href="blin8">Read more</a>                
              </div>
            <div class="bshoenew">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTilp798jTvqm1AIsU_xTvPByMKn6FGABPHNQ&usqp=CAU" alt="">
              <h2>All About Wide Feet</h2>
              <p>All about wide feet? Seems uncommon however, people with wide feet sometimes have difficulty in finding properly fitting shoes. If you have wide feet, then it’s very likely you are familiar </p>
              <a href="blin8">Read more</a>                
              </div>                       
          </div>
          <!-- foooter -->
          <div id="footer">
            <div class="footerdiv">
              <img src="mylogo.jpg" >
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, libero. Non eveniet aspernatur dolorum dignissimos?</p>
              <div class="soc">
                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-twitter"></i>
              </div>
            
            </div>
            <div class="footerdiv">
              <h2>Home</h2>
              <h2>Shop</h2>
              <h2>Categories</h2>
              <h2>Blogs</h2>
              <h2>About</h2>
              <h2>Contact us</h2>
            </div>
            <div class="footerdiv">
              <h2>Terms & Conditions </h2>
              <h2>Refund policy</h2>
              <h2>privacy policy</h2>
              <h2>Shopping policy</h2>
              <h2>Affilate</h2>
              <h2>partner us</h2>
            </div>
            <div class=" infro">
              <h1>Payment Servie</h1>
              <div class="pay">
              <a href=""><img src="data:image/jpeg;base64,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" alt=""></a>
              <a href=""><img src="data:image/png;base64,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" alt=""></a>
              <a href=""><img src="data:image/png;base64,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" alt=""></a>
            </div>
            </div>
            </div>
          
            

        </div>

          <script src="blog.js"></script>
</body>
</html>