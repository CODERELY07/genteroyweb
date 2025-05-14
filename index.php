<?php 

  include('./includes/head.php');

  if (isset($_SESSION['user_id'])) {
      header("Location: ./web.php");
      exit();
  }
?>
  <main>
      <div class="container" id="signIn">
      <?php include('./util/alert.php')?>
      <div class="flex items-center space-x-4">
        <img src="images/logo.png" alt="Institute Logo" class="w-40 h-16 object-contain" />
        <p class="text-gray-700 font-medium text-md">
          Institute of Computer Engineers in the Philippines - <br class="sm:hidden" />
          <span class="font-semibold">CSPC.SE</span>
        </p>
      </div>
        <h1 class="form-title"><b>Login</b></h1>
        <form method="POST" action="./action/login.php">
         
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
                <div class="line"></div>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
                <div class="line"></div>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
          <input type="submit" class="btn" value="Login" name="login"><br><br><br>
        </form>
        <div class="links">
          <p>Don't have account yet?</p>
          <a href="./register.php">Register</a>
        </div>
      </div>
  </main>
<?php include('./includes/footer.php');?>
