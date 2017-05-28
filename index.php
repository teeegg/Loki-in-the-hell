<?php
    include 'header.php';
?>

  
  
    <header id='header01'>
        <!--JavaScript Date-->
        <script>
            document.getElementById('header01').innerHTML = Date();
            $('#header01').css('color', 'white');
        </script>
        
        <br>
        
        <!--Color Picker-->
        Choose a color to color the below text <input id="color_picker" type="color" onchange="showHex();"> <span id="color_hex_value"></span>
        
    </header>

    <!--Logo-->
    <div class="logo">
      <a href="index.html" title="Kitchenlife">Kitchenlife</a>
    </div>
    
    <!-- Login Form -->
    <button class="signin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="includes/login.inc.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Username" name="email" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="submit">Login</button>
          <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
      <!--need to be styled!-->
    <?php
    if (isset($_SESSION['email'])){
    echo "<p style='position:relative;left:250px;font-family:'League Script', cursive;'>Welcome !".$_SESSION['email']."</p>";
    }else{
    echo "You're not logged in yet";
    }
?>
      <?php
        include 'signup.php';
?>
    
    <!--search form-->
    <div class="search">
          <!--search.php waiting to be inplemented-->
      <form method="post" name="search" action="includes/search.inc.php">
        <input type="text" placeholder="Search recipes/authors">
        <input type="image" name="submit" src="images/search.svg" height="20px" width="20px">
      </form>
    </div>
    <!--menubar-->
    <div class="menuBar">
      <ul>
        <li class="menuItem"><a class="active" href="index.php">Home</a></li>
        <li class="dropdown"><a class="dropbtn" href="receipt.php">Receipt</a>
          <div class="dropdown-content">
            <a href="receipt1">Receipt 1</a>
            <a href="receipt2">Receipt 2</a>
          </div>
        </li>
        <li class="dropdown"><a href="ingredients.html" class="dropbtn">Ingredients</a>
          <div class="dropdown-content">
            <a href="ingredient1">Ingredient 1</a>
            <a href="ingredient2">Ingredient 2</a>
          </div>
        </li>
        <li class="menuItem"><a href="health.html">Health</a></li>
        <li class="menuItem"><a href="myPage.html">My Page</a></li>
      </ul>
    </div>
    <!--
    <div class="menu-bar">
      <ul class="menu-items">
        <li class="menu"><a href="index.php" target="_blank">Home</a></li>

        <li class="dropdown"><a href="recipe.html" target="_blank">Recipes</a>
        <ul class="dropdown-items">
          <li><a href="#">recipe 1</a></li>
          <li><a href="#">recipe 2</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="ingredient.html" target="_blank">Ingredient</a>
        <ul class="dropdown-items">
          <li><a href="#">ingredient 1</a></li>
          <li><a href="#">ingredient 2</a></li>
        </ul>
        </li>

        <li class="menu"><a href="health.html" target="_blank">Health</a></li>

        <li class="menu"><a href="mypage.html" target="_blank">My Page</a></li>

      </ul>
    </div>
    -->

    <!-- Swiper Window-->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/chicken.png"></div>
            <div class="swiper-slide"><img src="images/egg.jpg"></div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
          </div>

          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="js/swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
          pagination: '.swiper-pagination',
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          paginationClickable: true,
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: 2500,
          autoplayDisableOnInteraction: false
      });
    </script>

    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/bg.js"></script>
    <script type="text/javascript" src="js/colorPicker.js"></script>
  <!--Searchbox-->
  </body>
</html>
