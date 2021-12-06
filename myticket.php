<?php include('server.php'); ?>
<?php 
   
    $sql = "SELECT * FROM name";
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
        .boxEdit {
            position:  absolute; 
            top: 20%;
            color : #282828;
            align: center;
            left: 10%;
            background-color: white;
            width: 980px;
            height: 700px;
            border: 2px solid white;
            padding: 15px;
            margin: 20px;
            display: inline-block;
            box-shadow: 5px 10px 8px #888888;
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
        
  .normal {
          font-weight: normal;
          }
  .light {
          font-weight: lighter;
          }

        
          .alignleft {
          float: left;
          line-height: 1px;
          }
          .alignright {
          float: right;
          line-height: 1px;
          }
          .button {
        background-color: #45a049; /* Green */
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
        }
        .button:hover {
            background-color: #2EFF00;
        }
        /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 25%;
        }

        /* The Close Button */
        .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        }
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
  <tr>
    <th><a href="loginlaew.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="action_page.php">
        <input type="text" style= "width:30%"placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
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
 <!-- pic -->
 <div class = "center">
 <div class = "boxEdit">
      <h1 class = "normal">My Tickets </h1>
     
 <div class="gallery"> 
 <?php $row = $result->fetch_assoc() ?>
 <?php $row1 = $result1->fetch_assoc() ?>
 <?php $row2 = $result2->fetch_assoc() ?>
 <?php $row3 = $result3->fetch_assoc() ?>
 <?php $row4 = $result4->fetch_assoc() ?>
      <figure>
        <img src="image\all2.jpg">
        <figcaption>
        <h3 class = "normal" ><?php echo $row1['Concert_Name'];?></h3>
        <p><?php echo $row2['Date'];?></p>
        <img src="image\map-locator.png" style="width:20px;float:left">
        <p style ="color:gray;font-size:12px"><?php echo $row4['Location_Name'];?></p>
        <p style ="color:red">Zone<?php echo $row3['Zone'];?>,<?php echo $row3['SeatNum'];?></p>
        <!-- modal -->
        
<!-- Trigger/Open The Modal -->
<button class="button" id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <h3><?php echo $row1['Concert_Name'];?></h3>
    <p><?php echo $row2['Date'];?></p>
        <img src="image\map-locator.png" style="width:20px;float:left">
        <p style ="color:gray;font-size:12px"><?php echo $row4['Location_Name'];?></p>
        <img  src="image\qr-code.png" style="width: 100%">
            <p class="alignleft" >Ticket Type: <span style="color:gray"><?php echo $row1['Category'];?></span></p>
            <p class="alignright">Zone:<span style="color:gray"><?php echo $row3['Zone'];?></span></p>
            <div style="clear: both;"></div>
            <p class="alignleft">Price:<span style="color:gray"> <?php echo $row3['Price'];?> Bath</span></p>
            <p class="alignright">SeatNo.:<span style="color:gray"><?php echo $row3['SeatNum'];?></span></p>
            <div style="clear: both;"></div>
            <h4><?php echo $row['FirstName'];?><span>
            <?php echo $row['LastName'];?></span></br>
            </br></br></br>
            
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    </br></br></br></br>
    </div> 
    </div>
    <div style = "height:800px">
    
</div>
   <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>
</body>
</html>