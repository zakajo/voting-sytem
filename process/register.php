<?php
    include './connect.inc.php';
    

    $name = $_POST['name'];
    $age = $_POST['age'];
    $nationality_no = $_POST['nationality_no'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $std = $_POST['std'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $status = 'pending';
    $vote = 0;
    $imgPath = 'voting-sytem/process/uploads/'.$image;

    move_uploaded_file($tmp_name,"./uploads/$image");
    $stmt = $dbCon->prepare("INSERT INTO users_table(name, age, nationality_no, image, std, password, status, vote) VALUES(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sisssssi", $name, $age, $nationality_no, $imgPath, $std, $password, $status, $vote);
    $stmt->execute();
    $stmt->close();
    header("Location: ../pages/candidate_parts.php");


    // if($password!=$cpassword){
    //     echo '<script>
    //     alert("password do not match");
    //     window.location="../pages/register.php";
    //     </script>';
    // }else{
    //     // Move image to upload folder
    //     // move_uploaded_file($tmp_name,"../uploads/$image");

    //     // INSERT DATA INTO DATABASE
    //     $sql = "INSERT INTO 'user' (name, age, nationality_no, image, std, password, status, vote)
    //         VALUES('$name','$age','$nationality_no','gggg','$std','$password', 0, 0)";

    //     $result = mysqli_query($dbCon, $sql);

    //     echo $result;
    // }
?>