

      
    <!-- Sign up -->
    <button class="signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>

    <div id="id02" class="modal">

      <form class="modal-content animate" action="includes/register.inc.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Your Email" name="email" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Your Password" name="password" required>
            
          <label><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm Your Password" name="cpassword" required>

          <button type="submit">Sign Up</button>
          <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button id="reg" type="submit">Sign Up</button>
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" id="cac">Cancel</button>
        </div>
      </form>
    </div>