<?php 

    session_start();
    require_once('server.php');
    $errors = array();
    
    if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    }
    $strSQL = "SELECT * FROM customer WHERE Username = '".$username."' and Password = '".$password."'";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if(!$objResult)  { 
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username/password try again!!";
        header('location: login.php');
     }
    else {
      //*** Session
        $_SESSION["success"] = $objResult["success"];
        $_SESSION['username'] = $username;
        session_write_close();
     
      //*** Go to Main page
          header("location:loginlaew.php");
        }
      mysqli_close($con);

      
    //$errors = array();

    /*if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }

    if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM customer WHERE Username = '$username' AND Password = '$password' ";
        $result = mysqli_query($conn,$query);

         if (mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: loginlaew.php');
        }
         else{
            array_push($errors, "Wrong username/password combination");
             $_SESSION['error'] = "Wrong username/password try again!!";
             header('location: login.php');
         }
    }*/
?>