<?php 
    session_start();
    include('server.php');

    $errors = array();
    if(isset($_POST['contact_user'])) {
   
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        // $id  = "SELECT * FROM customer";
        // $d = $row['Customer_ID'];
        $sql = "INSERT INTO contact1(cname,clastName,cemail,csubject,message )
        VALUES('$firstname', '$lastname', '$email', '$subject', '$message')";
        mysqli_query($conn,$sql);
        header('location: contact.php');
    }

?>