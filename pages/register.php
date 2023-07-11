<?php include '../components/header.php' ?>
  <div class='login-container signup d-flex align-items-center justify-content-center'>
    <div class='form-content'>
      <div class='text-center mb-4'>
        <h2 class='text-5'>Register</h2>
      </div>
      <form class="" action="../process/register.php" method='post' enctype="multipart/form-data">
        <div class='form-group'>
          <input class="form-control form-control-lg" name="name" type="text" placeholder="Name">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="age" type="number" placeholder="Age">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="nationality_no" type="text" placeholder="National ID No">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="std" type="text" placeholder="Standred">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="image" type="file" placeholder="Emage">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="password" type="password" placeholder="Create Password">
        </div>
        <div class='form-group'>
          <input class="form-control form-control-lg" name="cpassword" type="password" placeholder="Comfirm Password">
        </div>
        <button class='btn btn-success my-sm-0'>
          Login
        </button>
      </form>
      <div class='text-center'>
        I already have account <a href="./login.php">Sign up</a>
      </div>
    </div>
  </div>


  <script src="../assets/js/slim.js"></script>
  <script src="../assets/js/bootstrap.js" ></script>
</body>
</html>
