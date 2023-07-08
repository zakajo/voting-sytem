<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <style media="screen">

          p{
            font-size: 10px
            color:blue;

          }

          ul{
        			list-style-type: none;
        			padding: 50px;
        			margin: 0;

        		}
        		li{
        			display: inline;
        			padding: 50px;
        			font-family: Agency FB;
        		}
        		a{
        			color: blue;
        			font-size: 20px;
        }
        img{
          max-width:100px;
          max-height:150px;
          float: left;
        }
        body{
          background-clip: border-box;
          background-color: #E0FFFF;

        }

        marquee{
          display: contents;
          direction: rtl;
          font-size: 20px;
      }
      form{
        padding: 40px;
      }





  </style>

  </head>
  <body>
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="logo.jpg" alt="">
          <img src="logo1.jpg" alt="" style="float:right">
</div>



	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="panel w-50 my-auto shadow">
				<div class="panel-header text-center bg-primary text-white">




				</div>
				<div class="card-body">
					<form action="../Data/register.php" method="post">

						<div class="form-group">

							<input type="text"  class="form-control" name="name" id="name" placeholder="Full Name" required ="required">

						</div>
						<div class="form-group">

              <input type="text" name="age"  class="form-control"  id="age"placeholder="Age" required ="required">

            </div>
						<div class="form-group">

							<input type="text"  class="form-control" name="nationality_no" id="nationality_no" placeholder="Nationality No" required ="required">
              </div>
              <div class="mb-3">
            <input type="file" name="photo" class="form-control">
        			  </div>
            <div class="form-group">
              <select name="std" class="form-control">

                <option value="Voter">Voter</option>
                <option value="Candidate">Candidate</option>


              </select>
              </div>
						<div class="form-group">

							<input type="password"  class="form-control" name="password"  id="password" placeholder="Password" required ="required">

						</div>
            <div class="form-group">

              <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm password" required="required">

            </div>
            <button type="submit" class="btn btn-blue primary w-50">Register</button>
            <p>Already have an account? <a href="index1.php" class="text-blue">Login Here</a>
            </p>

					</form>
          <marquee style="color:blue"><strong>Register & vote your Vote your right</strong></marquee>

        </div>
      </div>

				</div>

			</div>

		</div>

	</div>







  </body>
</html>
