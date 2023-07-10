<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
  <style media="screen">

    body{
      background-image: url('img1.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
      background-position:70;
      background-attachment: scroll;
    }
    ul{
        list-style-type: none;
        padding: 45px;
        margin: 0;

      }
      li{
        display: inline;
        padding: 65px;
        font-family: Agency FB;
      }
      a{
        color: skyblue;
        font-size: 20px;
      }
      img{
        max-width:100px;
        max-height:150px;
        float: left;
      }
      .nav-links li{
        list-style: none;
      }
      .nav-links a{
        color: lightblue;
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
    				<li><strong> <a href="Information centre.php">Information centre</a></strong></li>
    				<li><strong><a href="Result.php">Result</a></strong></li>

    			</ul>
          </nav>

      </div>
    </div>

  </body>
</html>
