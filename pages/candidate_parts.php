<?php 
  include '../process/connect.inc.php';

  $sql = "SELECT * FROM users_table";
  $allCadidates = $dbCon->query($sql);
?>
<?php include '../components/header.php' ?>
  <div class="container py-4">
    <!-- THE START OF CADIDATE SECTION -->
    <h1 class="h1 text-muted text-center fs-1 fw-bold my-2"> Candidate</h1>
    <div class="row">
      <?php while($row = mysqli_fetch_assoc($allCadidates)){ ?>
      <div class="col-3 p-1">
        <div class="card w-100" style="width: 18rem;">
          <img class="card-img-top user-image" src="<?php echo 'http://localhost/'.$row['image'] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-success">Read Menefisto</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- THE START OF CADIDATE SECTION -->

  </div>
  <script src="../assets/js/slim.js"></script>
  <script src="../assets/js/bootstrap.js" ></script>
</body>
</html>
