<?php include '../components/header.php' ?>
  <div class='login-container d-flex align-items-center justify-content-center'>
    <div class='form-content'>
      <div class='text-center mb-4'>
        <h2 class='text-5'>Login</h2>
      </div>
      <form class="" action="../process/login.php" action='post'>
        <div class='form-group'>
          <label for="email" class="form-label">Email address</label>
          <input class="form-control form-control-lg" name="email" type="email" placeholder="example@gmail.com">
        </div>
        <div class='form-group'>
          <label for="password" class="form-label">Password</label>
          <input class="form-control form-control-lg" name="password" type="password" placeholder="Enter Password">
        </div>
        <button class='btn btn-success btn-lg w-100 my-sm-0'>
          Login
        </button>
      </form>
      <div class='text-center mt-4'>
        I don't have account <a href="./register.php">Sign up</a>
      </div>
    </div>
  </div>

  <script src="../assets/js/slim.js"></script>
  <script src="../assets/js/bootstrap.js" ></script>
</body>
</html>
