<?php
    session_start();
    include 'conn.php';
?>
<!DOCtype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kitchenlife | Where you can find a recipe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/receipt.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login.css">
    <!--Icon on the tag of a browser-->
    <link rel="shortcut icon" href="images/main.ico">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <meta name="author" content="Shaun Xiong, Simon Shen">
    <meta name="robots" content="index, follow">
    <meta name="description" content="A Kitchen Meal Website by 26 April 2017">
    <script src='jquery-3.2.1.min.js'></script>
    <script src="js/jquery.sticky.js"></script>
  </head>

  
    <body>
        
        <!--Logo-->
        <div class="logo">
          <a href="index.html" title="Kitchenlife">Kitchenlife</a>
        </div>
        
        <!--menubar-->
        <div class="menuBar">
          <ul>
            <li class="menuItem"><a class="active" href="index.html">Home</a></li>
            <li class="dropdown"><a class="dropbtn" href="receipt.html">Receipt</a>
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
        
        <div class="receiptFrame">
            <?php
                $sql = "select * from recipes";
                $result = mysqli_query($connection,$sql);
                
                if(mysqli_num_rows($result)){
                    while($row=mysqli_fetch_assoc($result)){
                        $rid = $row['rid'];
                        $rname = $row['rname'];
                        $steps = $row['steps'];
                        $extension = $row['extension'];
                        $author = $row['username'];
                        echo '<div class="receiptOverview" style="width: 70%;
                            margin: 0 auto;margin-bottom: 40px;"><img style="width: 48%;" src="uploads/'.$rid.'.'.$extension.'">
                            <div>
                            <h2>'.$rname.'</h2>
                            <h2>By '.$author.'</h2>
                            <p>'.$steps.'</p></div></div>';
                    }
                }
            
            ?>
            <!--
            <div class="receiptOverview">
        
                <img src="images/receipt/Butternut.jpeg">
                
                <div>
                    <h2>Roasted Butternut Squash and Spinach</h2>

                    <p>Throw this healthy dinner together in just 15 minutes with seasoned butternut squash and crunchy almonds folded together with fresh spinach.</p>

                    <a href="ingredients.html#ingredient01">Get the receipt.</a>
                </div>

            </div>

            <div class="receiptOverview">
                    
                <img src="images/receipt/Chickpea.jpeg">
                <div>
                    <h2>Chickpea and Red Pepper Soup with Quinoa</h2>

                    <p>Nutty-flavored, protein-filled quinoa cooks together with seasoned vegetables for a tasty dinnertime soup.</p>

                    <a href="ingredients.html#ingredient02">Get the receipt.</a>
                </div>
            </div>
            
            <div class="receiptOverview">
                
                <img src="images/receipt/Lentils.jpeg">
                <div>
                    <h2>Spicy Curried Lentils</h2>

                    <p>This spicy Indian dish cooks in a crockpot for 5 to 8 hours and is served over rice with a garnish of pistachios.</p>

                    <a href="#">Get the receipt.</a>
                </div>
            </div>
            
            <div class="receiptOverview">
                
                <img src="images/receipt/enchiladas.jpeg">
                <div>
                    <h2>Black Bean Vegan Enchiladas</h2>
                    
                    <p>NWarm enchiladas are the ultimate comfort food, and the whole family will love eating them! This recipe substitutes black beans for meat and vegan cheese for real cheese for the same great taste.</p>

                    <a href="#">Get the receipt.</a>
                </div>
            </div>
            
            <div class="receiptOverview">
                
                <img src="images/receipt/Lentils.jpeg">
                <div>
                    <h2>Spicy Curried Lentils</h2>

                    <p>This spicy Indian dish cooks in a crockpot for 5 to 8 hours and is served over rice with a garnish of pistachios.</p>

                    <a href="#">Get the receipt.</a>
                </div>
            </div>
            
            <div class="receiptOverview">
                
                <img src="images/receipt/enchiladas.jpeg">
                <div>
                    <h2>Black Bean Vegan Enchiladas</h2>
                    
                    <p>NWarm enchiladas are the ultimate comfort food, and the whole family will love eating them! This recipe substitutes black beans for meat and vegan cheese for real cheese for the same great taste.</p>

                    <a href="#">Get the receipt.</a>
                </div>
            </div>
            
            
        </div>
-->
        
        <!--Back To Top Scrolling Butotn-->
        <div class="scrollTop">
            <a href="#" id="backTop">
                <img src="images/icon/bktop.svg" height="60" width="60">
            </a>
        </div>
    
        <script src="js/sticky.js"></script>
        <script src="js/backTop.js"></script>
    </body>
</html>