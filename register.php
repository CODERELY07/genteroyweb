<?php 

  include('./includes/head.php');
  if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
  }
?>
  <main>
    <?php include('./util/alert.php')?>
    <div class="container" id="signup">
      <div class="photo-placeholder d-flex justify-content-between align-items-center">
        <div>
        </div>
        <img src="images/logo.jpeg" width="70px" alt="Institute Logo">
      </div>
      <h1 class="form-title"><b>Register</b></h1>
      <form method="POST" action="./action/register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="firstname" id="firstname" placeholder="First Name" >
           <label for="firstname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name" >
            <label for="lastname">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" >
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" >
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Register" name="register"><br><br>
      </form>

      <div class="links">
        <p>Already Have Account ?</p>
        <a href="./index.php">Login</a>
      </div>
    </div>
  </main>
<?php include('./includes/footer.php');?>
