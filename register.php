<?php 

  include('./includes/head.php');

  if (isset($_SESSION['user_id'])) {
    header("Location: ./web.php");
    exit();
  }
?>
  <main>
    <div class="container" id="signup">
    <?php include('./util/alert.php')?>
    <div class="flex items-center justify-between bg-white  rounded-lg p-4 mb-6">
      <div class="flex items-center space-x-4">
        <img src="images/logo.png" alt="Institute Logo" class="w-40 h-16 object-contain" />
        <p class="text-gray-700 font-medium text-md">
          Institute of Computer Engineers in the Philippines - <br class="sm:hidden" />
          <span class="font-semibold">CSPC.SE</span>
        </p>
      </div>
      </div>
      <h1 class="form-title"><b>Register</b></h1>
      <form method="POST" action="./action/register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="firstname" id="firstname" placeholder="First Name">
           <label for="firstname">First Name</label>
           <div class="line"></div>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
            <label for="lastname">Last Name</label>
             <div class="line"></div>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="email">Email</label>
             <div class="line"></div>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password">
            <label for="password">Password</label>
             <div class="line"></div>
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
