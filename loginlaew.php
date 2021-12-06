<?php 
session_start();
include('server.php');
$sq = "SELECT * FROM customer";
$resul = $conn->query($sq);

?>
<?php 
   
   $sql = "SELECT * FROM 'name'";
   echo "ยินดีต้อนรับคุณ".$_SESSION["name"];
   $result = $conn->query($sql);
   $sql1 = "SELECT * FROM concert";
   $result1 = $conn->query($sql1);
   $sql2 = "SELECT * FROM date";
   $result2 = $conn->query($sql2);
   $sql3 = "SELECT * FROM ticket";
   $result3 = $conn->query($sql3);
   $sql4 = "SELECT * FROM location";
   $result4 = $conn->query($sql4);
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
    <th><form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form></th>
<th><div class="dropdown">   <?php $ro = $resul->fetch_assoc() ?>
<button class="dropbtn">PROFILE</button><span style="font-size:15px;color:#B2B2B2; font-weight:normal;">&emsp;USERID:<?php echo $ro['Customer_ID'];?>
  <div class="dropdown-content">
  <a href="editprofile.php">Edit Profile</a>
  <a href="myticket.php">My Tickets</a>
  <a href="mypurchases.php">My Purchases</a>
  </div>
</div></th>
    <th><a href="yangmaidailogin.php"><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
  <h1 align="center">POPULAR CONCERTS</h1>
  <div class = "blank"></div>
<div class = "boxEdit">
<div class="gallery">
<?php $row = $result->fetch_assoc() ?>
 <?php $row1 = $result1->fetch_assoc() ?>
 <?php $row2 = $result2->fetch_assoc() ?>
 <?php $row3 = $result3->fetch_assoc() ?>
 <?php $row4 = $result4->fetch_assoc() ?>
      <figure>
        <img src="img\all2.jpg">
        <figcaption>
        <p style="font-size:20px;"><?php echo $row1['Concert_Name'];?></p>
        <p><?php echo $row2['Date'];?></p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px"><?php echo $row4['Location_Name'];?></p>
        </br></br>
        <a href="detailticket.php" class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\pop2.jpg">
        <figcaption>
        <p style="font-size:20px;">Kamikaze Party 2021</p>
        <p>28 August 2021</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">Impact Arena, Muang Thong Thani</p>
        </br></br>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\pop3.jpg">
        <figcaption>
        <p style="font-size:20px;">RRCB MBK (ROCK And ROLL Come Back MBK)</p>
        <p>Coming Soon</p>
        <p style ="color:gray;font-size:12px">Floor G, Avenu<img src="img\map-locator.png" style="width:5%;float:left">e ZONE A-B (Skywalk)
MBK Center</p>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      </div>
    <h1 align="center">ALL CONCERT</h1>
    <div class="gallery">
      <figure>
        <img src="img\all1.jpg">
        <figcaption>
        <p style="font-size:20px;">2020 TRINITY INVISIBLE WORLD LIVE IN BANGKOK</p>
        <p>Coming Soon</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">Impact Arena, Muang Thong Thani/
Live Streaming by TTM LIVE</p>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\pop1.jpg">
        <figcaption>
        <p style="font-size:20px;">PHUKET SUNSET BEACH RUN</p>
        <p>Coming Soon</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">Siam Parasite</p>
        
        </br></br>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\all3.png">
        <figcaption>
        <p style="font-size:20px;">Polycat Live Concert</p>
        <p>22 April 2021</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">Bang Tao Beach, Laguna Phuket, Phuket</p>
        
        </br></br></br></br>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      </div>

      <div class="gallery">
      <figure>
        <img src="img\all4.jpg">
        <figcaption>
        <p style="font-size:20px;">LEO presents Cat Expo Chiang Mai</p>
        <p>24 April 2021</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">Centralplaza Chiangmai Airport</p>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\all5.jpg">
        <figcaption>
        <p style="font-size:20px;">Oonrak Christmas Party 2020</p>
        <p>24 April 2021</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">LIDO CONNECT HALL 3</p>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      <figure>
        <img src="img\all6.jpg">
        <figcaption>
        <p style="font-size:20px;">Ink Warantorn Live Concert</p>
        <p>20 April 2020</p>
        <img src="img\map-locator.png" style="width:5%;float:left">
        <p style ="color:gray;font-size:12px">TROK BANG KOK</p>
        <a class="button">BUY NOW</a>
        </figcaption>
      </figure>
      </div>
      <a href="selectconcert.php" class="button">VIEW ALL</a>
      </br></br></br></br>
    </div> 
    
   <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div> 
    
</body>
</html>