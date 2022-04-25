<?php 
   
    include('server.php'); 
    
?>
<?php 
   
   $sql = "SELECT * FROM concert";
   $result = $conn->query($sql);
   $sql1 = "SELECT * FROM artist";
   $result1 = $conn->query($sql1);
   $sql2 = "SELECT * FROM date";
   $result2 = $conn->query($sql2);
   $sql3 = "SELECT * FROM location";
   $result3 = $conn->query($sql3);
   $sql4 = "SELECT * FROM ticket";
   $result4 = $conn->query($sql4);
   $sql5 = "SELECT * FROM buying";
   $result5 = $conn->query($sql5);

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
            background-color: #dddddd;
        }

        .footer {
            width: 100.0%;
            height:170px;
	        /* position:absolute; */
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
 
    
    h4 {
        font-family: 'Montserrat', sans-serif;
        font-size: 35px;
        }
    h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        color: white;
        }
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
        .button2 {background-color: #008CBA;}   
        *{
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 500px; /* Should be removed. Only for demonstration */
        }

/* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
        }
        #rcorners1 {
 
 background: #3D3C3A ;
 padding: 20px; 
 width: 470px;
 height: 510px;  
}

.boxEdit {
            /* position: fixed; or absolute */
            top: 50%;
            color : #282828;
            align: center;
            left: 80%;
            background-color:#3D3C3A;
            width: 80%;
            height: 100%;
            border: 2px solid black;
            padding: 50px;
            margin: 50px;
            display: inline-block;
        }

        .textdetail {
            margin-left:150px;
        }

        .imgdetail {
            margin-left:100px;
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
  
  <?php $row = $result->fetch_assoc() ?>
  <?php $row1 = $result1->fetch_assoc() ?>
  <?php $row2 = $result2->fetch_assoc() ?>
  <?php $row3 = $result3->fetch_assoc() ?>
  <?php $row4 = $result4->fetch_assoc() ?>
  <?php $row5 = $result5->fetch_assoc() ?>

  <h4 style="text-indent: 5em;"><?php echo $row['Concert_Name']; ?>&nbsp;&nbsp;&nbsp; <button class="button button2"  onclick="location.href='zone.php'">BUY  TICKET</button></h4>
  
  <div class="row">
    <div class="column" style="background-color: white;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="image/all2.jpg "width="390" height="500">
      <p>&nbsp;</p> 
      <p>&nbsp;</p> 
        <div class="textdetail">
            <h4 style="margin-left:100px;">Detail </h4>
            
            <d style="color:#656868; margin-left:100px;">GENELABCON คอนเสิร์ตประจำปีของค่าย GENELAB ค่ายดนตรีที่สร้างขึ้นมาเพื่อเปิดพื้นที่ให้ศิลปินคนรุ่นใหม่กลับมาในครั้งนี้กับปรากฏการณ์ครั้งสำคัญที่รวมตัวเหล่าศิลปินจากค่าย GENELAB แบบยกค่าย
        กับงาน “GENELABCON WEEKEND” คอนเสิร์ตประจำปีของค่าย GeneLabที่เติบโตอย่างรวดเร็วจนมีศิลปินในค่ายมากมายนำโดย Cocktail, Three Man Down, Tilly Birds, Taitosmith, The Darkest Romance และศิลปินใหม่จากค่าย GeneLab อาทิเช่น Ae Commander, Asia7, Only Monday, Pang Pattanan, Tiger Killer, Tryst และ 20Hz
        พบกับคอนเสิร์ต 4 คอนเสิร์ต 4 รอบการแสดง ที่บอกเลยว่าพิเศษสุดๆและห้ามพลาดอย่างเด็ดขาด!
                        ในวันเสาร์ที่ 19 และ 20 มิถุนายน 2564 ณ ยูเนี่ยน ฮอลล์, ชั้น 6 ศูนย์การค้ายูเนี่ยน มอลล์</d>
        </div>
    </div>
    

    <div class="column" style="background-color:white;">
    <div  class = "boxEdit">
    


    <h3 style="color:#656868;"><img src="image/user.png "width="40" height="40">Artist&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row1['Artist_Name']; ?></span></h3>
    <h3 style="color:#656868;"><img src="image/calendar.png "width="35" height="40">&nbsp;Show Date&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row2['Date']; ?></span></h3>
    <h3 style="color:#656868;"><img src="image/map-locator.png "width="35" height="40">&nbsp;Venue&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row3['Location_Name']; ?></span></h3>
    <h3 style="color:#656868;"><img src="image/music.png"width="35" height="40">&nbsp;Type&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row['Category']; ?></span></h3>
    <h3 style="color:#656868;"><img src="image/calendar (1).png"width="35" height="40">&nbsp;Public Sale&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row5['Start_Date']; ?></span></h3>
    <h3 style="color:#656868;"><img src="image/tickets.png "width="35" height="40">&nbsp;Ticket Price&nbsp;
    <span style="color:white; font-size: 20px;" ><?php echo $row4['Price']; ?></span></h3>


    
</div>  


    
        <br /><br /><br />
        <div class= "imgdetail">
            <img src="image\-genelabcon-final.jpg "width="470" height="600">   
        </div> 
    </div>
   
    </div>

  
  <div style="height: 200px;"></div>
    

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>
</body>
</html>