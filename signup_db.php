<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname =  mysqli_real_escape_string($conn, $_POST['lastname']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $id = rand();
        if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM customer WHERE Username = '$username' OR Email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if ($result['username'] === $username){
                    array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email){
                array_push($errors, "Email already exists");
            }

        }

        if (count($errors)==0){
            $password = md5($password_1);

            // $sql = "INSERT INTO customer (Username, Email, Password,) VALUES ('$username', '$email', '$password')";
            $sql = "INSERT INTO customer(Username,Password,Email,Gender,Tel,BirthDay, Customer_ID)
			VALUES('$username', '$password_1', '$email', '$gender', '$tel','$birthday','$id')";
            $sql1 = "INSERT INTO name(FirstName,LastName)
			VALUES('$firstname', '$lastname')";
            mysqli_query($conn,$sql);
            mysqli_query($conn,$sql1);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: login.php');
        } else {
            array_push($errors, "Username or Email already exists");
            $_SESSION['error'] = "Username or Email already exists";
            header("location: signup.php");
        }

    }
    

?>