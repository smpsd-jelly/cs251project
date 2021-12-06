<?php include('server.php'); ?>
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
            border: 1px solid #dddddd;
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


        .blank {
            background-color: white;
            width: 11%;
            height: 100%;
            display: inline-block;
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

        .boxiconselect {
          width: 125px;
          height: 125px;
          border: 5px solid chartreuse;
        }

        .concerticon {
          width: 225px;
          height: 600px;
          border: 1px solid lightgray;
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

        concert img{
            width: 100%;
        }

        .columnicon {
          float: left;
          width: 23%;
          padding: 15px;
        }

        .boxconcert {
            display: flex:
            width: 900px;
            margin-left: 15%;
            margin-top: 200px;
            padding: 25px;
        }

        .columnconcert {
            float: left;
            width: 25%;
            padding: 25px;
        }

        .rowconcert:after {
            content: "";
            display: table;
            clear: both;
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

        .btn-text-center{
	        text-align: center;	
        }
         
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
  <tr>
    <th><a href="/loginlaew.php">wowTicket</th>
    <th><form class="example" action="action_page.php">
        <input type="text" placeholder="Search .." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form></th>
    <th><div class="dropdown">   
    <button class="dropbtn">PROFILE</button>
      <div class="dropdown-content">
      <a href="/editprofile.php">Edit Profile</a>
      <a href="/myticket.php">My Tickets</a>
      <a href="/mypurchaes.php">My Purchases</a>
      </div>
    </div></th>
    <th><input type="button" value="LOG OUT"></th>
  </tr>
</table>

<div class = "mypurchases">
    <h1 align="left">My Purchases</h1>
    
      <div class = "columnicon">
        <div class="boxiconselect">
              <icon>
                <a href= "/toPay.php">
                <img src= "img\money.png">
                </a>
                <h3 align="center" style="color:saddlebrown">To Pay</h3>
              </icon>
        </div>
      </div>
      <div class = "columnicon">
        <div class="boxicon">
              <icon>
                <a href= "/toReceive.php">
                <img src= "img\delivery.png">
                </a>
                <h3 align="center" style="color:saddlebrown">To Receive</h3>
              </icon>
        </div>
      </div>
      <div class = "columnicon">
        <div class="boxicon">
              <icon>
                <a href= "/Complete.php">
                <img src= "img\check-mark.png">
                </a>
                <h3 align="center" style="color:saddlebrown">Completed</h3>
              </icon>
        </div>
      </div>
</div> 
<!----------
<?php$sql = 
"SELECT customer_order.Customer_ID, customer_order.Status, concert.Concert_Name, customer_order.Concert_ID
FROM customer_order
LEFT JOIN concert
ON customer_order.Concert_ID = concert.Concert_ID
WHERE Customer_ID='1' AND (Status='confirm')
";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo"
        <div class = "columnconcert">
                    <div class = "concerticon">
                        <concert>
                            <a href= "/toPay.php">
                            <img src= "img\all2.jpg">
                            </a>
                            <p style="font-size:20px;">&nbsp; ".$row['Concert_Name']."</p>
                            <p>&nbsp; ".$row['Date'].".</p>
                            <img src="img\map-locator.png" style="width:5%;float:left">
                            <p style ="color:gray;font-size:12px">&nbsp; ".$row['Location_Name']."</p>
                            <p  style ="color:brown;font-size:15px">&nbsp;Zone  ".$row['Zone'].", ".$row['SeatNum']."</p>
                            <p  style ="color:brown;font-size:15px">&nbsp;920THB</p>
                            <div class="btn-text-center"><a align="center" class="button">Continue Order</a></div>
                        </concert>
                    </div>
            </div>";
        }
    } else {
        echo "0 results";
}?>--->
<div class = "boxconcert">
    <div class= "rowconcert"> 
           
            <div class = "columnconcert">
                    <div class = "concerticon">
                        <concert>
                            <a href= "/toPay.php">
                            <img src= "img\all2.jpg">
                            </a>
                            <p style="font-size:20px;">&nbsp; $row['Concert_Name']."</p>
                            <p>&nbsp; ".$row['Date'].".</p>
                            <img src="img\map-locator.png" style="width:5%;float:left">
                            <p style ="color:gray;font-size:12px">&nbsp; ".$row['Location_Name']."</p>
                            <p  style ="color:brown;font-size:15px">&nbsp;Zone  ".$row['Zone'].", ".$row['SeatNum']."</p>
                            <p  style ="color:brown;font-size:15px">&nbsp;920THB</p>
                            <div class="btn-text-center"><a align="center" class="button">Continue Order</a></div>
                        </concert>
                    </div>
            </div>
           
            
            
     </div>    
</div>
<!--
 <div class="footer">
   <footer><a href="/loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></a></footer>
   <p style="color:white;">help
   <footer><a href="/contact.php"><p style="color:white;">Support</p></a></footer>
    </div> -->
</body>
</html>