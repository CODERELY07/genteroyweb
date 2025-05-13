<?php include('./includes/head.php');?>
  <main>
      <div class="container" id="signIn">
        <div class="photo-placeholder">
          <img src="images/logo.jpeg" width="70px"> </div>
        <h1 class="form-title"><b>Login</b></h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
          <input type="submit" class="btn" value="Login" name="signIn"><br><br><br>
        </form>
        <div class="links">
          <p>Don't have account yet?</p>
          <a href="./register.php">Register</a>
        </div>
      </div>
  </main>
<?php include('./includes/footer.php');?>
