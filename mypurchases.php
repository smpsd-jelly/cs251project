<?php 
   
    include('server.php'); 

   $sql = "SELECT * FROM concert";
   $result = $conn->query($sql);
   $sql1 = "SELECT * FROM ticket";
   $result1 = $conn->query($sql1);
   $sql2 = "SELECT * FROM date";
   $result2 = $conn->query($sql2);
   $sql3 = "SELECT * FROM location";
   $result3 = $conn->query($sql3);
   $sql4 = "SELECT * FROM ticket";
   $result4 = $conn->query($sql4);
   
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
        }

        h1,h2{
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        h3{
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
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
            background-color: white;
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
            
            top: 50%;
            color : #282828;
            align: center;
            left: 80%;
            background-color: white;
            width: 70%;
            height: 100%;
            border: 2px solid white;
            padding: 15px;
            margin: 20px;
            display: inline-block;
            box-shadow: 5px 10px 8px #888888;
        }

        .blank {
            background-color: white;
            width: 11%;
            height: 100%;
            display: inline-block;
        }

        .gallery{
             display: flex;
        }

        figure{
            width: 200px;
        }

        figure img{
            width: 100%;
        }

        figure figcaption{
            text-align: center;
        }

        .boxicon {
          width: 125px;
          height: 125px;
          border: 5px solid lightgray;
        }

        .mypurchases {
          background-color: white;
          width: 600px;
          margin-left: 33%;
          margin-top: 50px;
          padding: 25px;
        }

        icon{
            width: 125px;
            
        }

        icon img{
            width: 100%;
        }

        .columnicon {
          float: left;
          width: 23%;
          padding: 15px;
        }

        .button {
        background-color: black; 
        border: none;
        width: 65%;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px 2px;
        cursor: pointer;
        border-radius: 12px;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Prompt', sans-serif;
        }
        
        .button:hover {
            background-color: gray;
        }
         
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
    <tr>
    <th><a href="loginlaew.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="finding.php" method="GET">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"  value="Search" ><i class="fa fa-search"><a href= "finding.php"></a></i></button>
    </form></th>
    <th><div class="dropdown">  
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
    </div></th>
    <th><a href="yangmaidailogin.php"><input type="button" value="LOG OUT"></th>
  </tr>
</table>

  <div class = "mypurchases">
    <h1 align="left">My Purchases</h1>
    
      <div class = "columnicon">
        <div class="boxicon">
              <icon>
                <a href= "toPay.php">
                <img src= "img\money.png">
                </a>
                <h3 align="center" style="color:saddlebrown">To Pay</h3>
              </icon>
        </div>
      </div>
      <div class = "columnicon">
        <div class="boxicon">
              <icon>
                <a href= "toReceive.php">
                <img src= "img\delivery.png">
                </a>
                <h3 align="center" style="color:saddlebrown">To Receive</h3>
              </icon>
        </div>
      </div>
      <div class = "columnicon">
        <div class="boxicon">
              <icon>
                <a href= "Complete.php">
                <img src= "img\check-mark.png">
                </a>
                <h3 align="center" style="color:saddlebrown">Completed</h3>
              </icon>
        </div>
      </div>
  </div>
 <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></a></footer>
   <p style="color:white;">help
   <footer><a href="contact.php"><p style="color:white;">Support</p></a></footer>
    </div> 
</body>
</html>