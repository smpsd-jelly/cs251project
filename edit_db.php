<?php 
    session_start();
    require_once('server.php');
    $errors = array();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    $name = $_SESSION['username'];  
    
    if(isset($_POST['edit_user'])) {
        $customerid =  mysqli_real_escape_string($conn, $_POST['customerid']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $bday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $tel = mysqli_real_escape_string($conn, $_POST['phonenumber']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        }
    
        $sql = "UPDATE customer
        SET Tel='$tel' , BirthDay='$bday' , Gender='$gender', Email='$email'
        WHERE Customer_ID = '$customerid'";
        $sql2 = "UPDATE name
        SET FirstName = '$firstname', Lastname = '$lastname'
        WHERE  Customer_ID = '$customerid'";
     
     if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
        echo "<script language=\"JavaScript\">";
        echo "alert('UPDATED SUCCESSFULLY');";
        echo "window.open(\"editprofile.php\",\"_self\");";
        echo "</script>";    

      } else {
        array_push($errors, "Wrong combination");
        $_SESSION['error'] = "Wrong try again!!";
        header('location: editprofile.php');
        mysqli_error($conn);
      }

?>