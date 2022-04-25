<?php include('server.php');
$sq = "SELECT * FROM customer";
$resul = $conn->query($sq);



     session_start();
     if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        body{
            font-family: 'Montserrat', sans-serif;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
            font-style: normal;
        }
        
        h1,h2,h3{
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
        
        .normal {
             font-weight: normal;
        }


        .header{
            width: 100.0%;
            height: 20.0%;
            position: absolute;
            background-color: #C1C1C1;
            font-size: 35px;
        }

        table {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 100.0%;
        }

        td, th {
            border-collapse: collapse;
            text-align: center;
            font-size: 35px;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .footer {
            width: 100.0%;
            height:170px;
	        /* position:fixed; */
	        bottom:0px;
            background-color: black;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }       
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
            font-size: 16px;
        }

.dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
       
        .boxEdit {
            /* position: fixed; or absolute */
            top: 50%;
            color : #282828;
            align: center;
            left: 80%;
            background-color: white;
            width: 50%;
            height: 100%;
            border: 2px solid black;
            padding: 50px;
            margin: 50px;
            display: inline-block;
        }
        .blank {
            background-color: white;
            width: 19%;
            height: 100%;
            display: inline-block;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type=email], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
        input[type=date], select {
            width: 20%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box
            
        }
        a[type=submit] {
            width: 40%;
            background-color: #282828;
            color: white;
            padding: 11px 120px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            border-radius: 15px;
            text-decoration: none;
            font-size: 14px;
            }

         a[type=submit]:hover {
            background-color: gray;
        }
        button[type=reset] {
            width: 40%;
            background-color: white;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border:1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            border-radius: 15px
            }

         button[type=submit]{
            width: 40%;
            background-color: #555555;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border:1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            border-radius: 15px
        }
       
         
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table >
<tr>
    <th><a href="loginlaew.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="finding.php" method="GET">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"  value="Search" ><i class="fa fa-search"><a href= "finding.php"></a></i></button>
    </form></th>
    <th><div class="dropdown">   <?php $ro = $resul->fetch_assoc() ?>
        <!-- logged in user information -->
        <button class="dropbtn">PROFILE</button>
        <div class="dropdown-content">
        <a href="editprofile.php">Edit Profile</a>
        <a href="myticket.php">My Tickets</a>
        <a href="mypurchases.php">My Purchases</a>
        </div>
        <?php if (isset($_SESSION['username'])) : ?>
        
        <span style="font-size:15px;color:#B2B2B2; font-weight:normal;">&emsp;
              Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                <!-- <p><a href="loginlaew.php?logout='1'" style="color: red;">Logout</a></p> -->
        <?php endif ?>
    </div>

  
</div></th>
    <th><a href="yangmaidailogin.php"><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
  
<!-- notification message-->
<?php if (isset($_SESSION['success'])) : ?>
                    <div class="success">
                        <h3>
                            <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </h3>
                    </div>
    <?php endif ?>

<!-- ส่วนของedit profile -->
<div class="blank">

</div>
<?php
 $name = $_SESSION['username'];

 $sql = "SELECT customer.Customer_ID,name.FirstName,name.LastName,customer.BirthDay,customer.Tel,customer.Gender,customer.Email
 FROM name
 LEFT JOIN customer
 ON name.Customer_ID = customer.Customer_ID 
 WHERE customer.Username='$name'";
 $result = $conn->query($sql);

?>
<div  class = "boxEdit">

    <?php
    while(($row = $result->fetch_assoc()) !== null){
    ?>
            <h1 class = "normal">Edit Profile
            </h1>
        
            <form action="edit_db.php"  method="post">
            
            <span style="font-size:15px;color:#B2B2B2">USER ID: </span>
            <input type="text" name="customerid" readonly value="<?php echo $row['Customer_ID'];?>">
            <label for="fname">FIRST NAME</label>
            <input type="text" id="fname" name="firstname"  value="<?php echo $row['FirstName'] ?>"require>
            

            <label for="lname">LAST NAME </label>
            <input  type="text" id="lname" name="lastname"  value="<?php echo $row['LastName'] ?>"require>
            

            <label for="birthday">BIRTHDAY</label>
            <input style = width:23% type="date" id="birthday" name="birthday" value="<?php echo $row['BirthDay'] ?>" require>
        
            <label for="phonenumber">PHONE NO</label>
            <input style = width:20% type="text" id="phonenumber" name="phonenumber" value="<?php echo $row['Tel'] ?>" require>

            <label for="gender">GENDER</label>
            <select style = "width:20%"  id="Gender" name="gender"require >
            <option value=""><?php echo $row['Gender'] ?></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            
            </select>

            <label for="email">Email </label>
            <input  type="email" id="email" name="email" value="<?php echo $row['Email'] ?>" require>
            <p></p>
            <button type="submit" name="edit_user" >Submit</button>
            <button type="reset" value="Reset" onclick="goBack()">Cancel</button>
        </form>
        <?php } ?> 
        </div>  

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

</br>
</br></br></br></br></br></br></br></br></br>

   <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>
</div>
</body>
</html>