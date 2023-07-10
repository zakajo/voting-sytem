<?php


{

include 'connect1.php';

$name= $_POST['name'];
$age= $_POST['age'];
$nationality_no = $_POST['nationality_no'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];




if($password!=$cpassword){
  echo '<script>
  alert("password do not match");
  window.location="../Data/registration.php";
  </script>';
}

else {
  move_uploaded_file($tmp_name,"../uploads/$image");

  $sql ="insert into 'user' (name,age,nationality_no,photo,standard,password,status,vote)values
('$name','$age','$nationality_no','$image','$std','$password',0,0)";

$result=mysqli_query($dbCon,$sql);

if($result){
  echo '<script>
     alert("Registration Successfull");
     window.location="../";
     </script>';
}else {
  die(mysqli_error($dbCon));
}

}
}


?>
