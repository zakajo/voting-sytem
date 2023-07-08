<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>National Election Commission </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
  <style media="screen">

  ul{
			list-style-type: none;
			padding: 40px;
			margin: 0;

		}
		li{
			display: inline;
			padding: 40px;
			font-family: 'Poppins', sans-serif;
		}
    a{
      font-size:15px;

    }

p{
  font-size: 10px;
}

body{
  background-image: url('OIP1.jpg'),url('OIP.jpg'), url('OIP2.jpg'), url('image1.jpg');
         background-repeat: no-repeat,no-repeat,no-repeat,no-repeat;
         background-size:50% 50%, 60% 60%, 50% 50%, 50% 50%;
         background-position:top left,bottom left,top right,bottom right;
         background-attachment: scroll;
         background-color: #E0FFFF;
         z-index: -1;

}


        img{
          max-width:100px;
          max-height:150px;
          float: left;
        }

  marquee{
          display: contents;
          direction: rtl;
          font-size: 15px;
          font-family: 'Poppins', sans-serif;
    }





      }
      .nav-links li{
        list-style: none;
      }
      .nav-links a{
        color: skyblue;
        text-decoration: none;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 14px;
      }
      .burger{
        display: none;
        cursor: pointer;
      }
      .burger div{
        width: 25px;
        height: 3px;
        background-color: white;
        margin: 5px;
        transition: 0.3s ease;
      }
      @media screen and (max-width:1024px) {
        .nav-links{
          width: 60px;
        }

@media screen and (max-width:768px) {
        body{
          overflow-x: hidden;
        }



      .nav-links{
        position: absolute;
        right: 0px;
        height: 92vh;
        top: 8vh;
        background-color: #5d4954;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 50%;
        transform: translateX(100%);
        transition: transform 0.5s ease-in;
      }
      .nav-links{
        opacity: 0;
      }
      .burger{
        display: block;
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
<nav class="nav-links">
			<ul>
				<li><strong> <a href="index1.php">Home</a></strong> </li>
				<li><strong> <a href="About us.php">About us</a></strong></li>
        <li><strong> <a href="Candidate & Parts.php">Candidate & Parts</a></strong></li>
				<li><strong><a href="Result.php">Result</a></strong></li>
        <li><strong> <a href="information centre.php">information centre</a></strong></li>
        <li><strong><a href="Admin.php">Admin</a></strong></li>

			</ul>

    </nav>
<body>
<div class="container vh-100">
  <div class="row justify-content-center h-100">
    <div class="card w-25 my-auto shadow" >
      <div class="card-header text-center bg-primary text-white">
        <h2>Login form</h2>

      </div>
      <div class="card-body">
        <form action="Login.php" method="post">
          <div class="form-group">
          <label for="Name">Name</label>
          <input type="Name" id="Name" class="form-control" name="Name" />

        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input type="password" id="password" class="form-control" name="password" />


        </div>
        <input type="submit" class="btn btn-primary w-100" value="Login" name="">
      <p>Don't have an account <a href="registration.php" class="text-blue">Register Here</a></p>




        </form>



      </div>
      <div class="card-footer text-right">
        <small>&copy; Zeko</small>




      </div>

    </div>

      </div>



</div>

</div>





<marquee style="color:skyblue"><strong>National Election Commission your Vote your right</strong></marquee>







  </body>
</html>
