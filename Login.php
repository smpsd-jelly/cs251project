<?php 
    session_start();
    include('server.php'); 
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
        }

        h1,h2,h3{
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
        .no{
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

        .b1{
            background-color: black;
            border: none;
            color: white;
            padding: 15px 20px;
        }
        .b2{
            background-color: white;
            border: none;
            color: black;
            padding: 15px 20px;
        }
        .b1:hover{
            background-color: gray;
            color: white;
        }

        .c{
            border: 1px solid #D1D1D1;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .d{
            font-family: 'prompt', sans-serif;
            font-size:14px;
            font-weight: normal;
        }
        .f{
            /* border-radius: 8px;
            padding: 10px 15px; */
            display: inline-block;
            border-radius: 8px;
            background-color: black;
            border: none;
            color: white;
            text-align: center;
            font-size: 15px;
            padding: 10px 10px;
            width: 100px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        .f span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .f span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .f:hover span {
            padding-right: 25px;
        }

        .f:hover span:after {
            opacity: 1;
            right: 0;
        }

        .box {
            /* position:absolute; */
            height:400px;
            width:400px;
            position: absolute;
            background: white;
            border: 0.5px solid #D1D1D1;
            /* padding:30px 0px; */
            top:calc(50vh - 200px);
            left:calc(50vw - 200px);
        }
        .box input{
            width:300px;
            padding:15px;
        }

        .footer {
            width: 100.0%;
            height:170px;
	        position:fixed;
	        bottom:0px;
            background-color: black;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }       
           
         
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
  <tr>
    <th><a href="yangmaidailogin.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form></th>
    <th><a class="b2 b1 d" href="login.php" style="text-decoration:none" value="SIGN IN">SIGN IN</an></th>
    <th><a href="signup.php" style="text-decoration:none" class="b1 d">SIGN UP NOW</a></th>
  </tr>
</table>
<div class="box">
    <br><h1 align="center" style="font-weight: normal">Sign In</h1>
    <div align="center">
        <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
        <?php endif ?>
        <div class="input-group">
            <input class="c" type="text" id="username" name="username" placeholder="Username" required><br><br>
            </div>
        
        <div class="input-group">
            <input class="c" type="password" id="password" name="password" placeholder="Password" required><br><br>
            </div>
        
        <div class="input-group">
        <br>
            <botton style="text-decoration:none" class="b1 f" type="submit" name="login_user"><span>SIGN IN</span></a><br>
            </div>
    </form></div>
    <p><h6 align="center" class="no" style="color:gray">forgot password?<a href="signup.php" style="text-decoration:none"><span>&emsp;&emsp;Not a member yet?</span></a></h6></p>
    </div>
   <!-- <div class="footer">
   <footer><a href="http://localhost/register/yangmaidailogin.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="https://www.youtube.com/watch?v=SpEJOo2mLfQ"><p style="color:white;">help</p></footer>
   <footer><a href="https://www.youtube.com/watch?v=6c8tqsfZg6s"><p style="color:white;">Support</p></footer>
    </div> -->
</body>
</html>