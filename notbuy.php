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
	       /* position:fixed;*/
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
<button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
  <a href="editprofile.php">Edit Profile</a>
  <a href="myticket.php">My Tickets</a>
  <a href="mypurchases.php">My Purchases</a>
  </div>
</div></th>
<!--    <th><input type="button" value="PROFILE"></th>-->
<th><a href="yangmaidailogin.php"><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
  
  

            <div style ="height:200px"> </div>
        <h1 style="text-align: center;" >ยังไม่เปิดให้บริการ</h1>
        <p style="text-align: center;"  >ติดตามความเคลื่อนไหวของคอนเสิร์ตได้ทาง www.wowticket.com </p>
    
        <div style ="height:200px"> </div>
    
        <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>
</body>
</html>