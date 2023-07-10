<?php
    include './connect.php';
    // rest of code
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
        window.location="../pages/register.php";
        </script>';
    }else{
        // Move image to upload folder
        move_uploaded_file($tmp_name,"../uploads/$image");

        // INSERT DATA INTO DATABASE
        $sql = "INSERT INTO 'user' (name, age, nationality_no, photo, standard, password, status, vote)
            VALUES('$name','$age','$nationality_no','$image','$std','$password',0,0)";

        $result = mysqli_query($dbCon, $sql);
    }
?>