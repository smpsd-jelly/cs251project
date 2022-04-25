<?php 

    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }

    if(count($errors)==0){
        $password = md5($password);
        $query = "SELECT * FROM customer WHERE Username = '$username' AND Password = '$password' ";
        $result = mysqli_query($conn,$query);

        // if (mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: loginlaew.php');
        // }
        // else{
        //     array_push($errors, "Wrong username/password combination");
        //     $_SESSION['error'] = "Wrong username/password try again!!";
        //     header('location: login.php');
        // }
    }
?>