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

        .mytext {
          background-color: white;
          width: 100%;
          margin-top: 50px;
          text-align: center;
        }

        .concerticon {
          width: 300px;
          height: 700px;
          border: 1px solid lightgray;
        }

        concert img{
            width: 100%;
        }

        .columnicon {
          float: left;
          width: 20%;
          padding: 15px;
        }

        .boxconcert {
            text-align: center;
            display: flex:
            width: 900px;
            margin-left: 12%;
            margin-top: 10px;
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
            width: 100%
        }

        .b1{
            background-color: black;
            border: none;
            color: white;
            padding: 15px 20px;
        }
        .b1:hover{
            background-color: gray;
            color: white;
        }
        .b2{
            background-color: white;
            border: none;
            color: black;
            padding: 15px 20px;
        }
        .d{
            font-family: 'prompt', sans-serif;
            font-size:14px;
            font-weight: normal;
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
    <th><a class="b2 b1 d" href="login.php" style="text-decoration:none" value="login">LOGIN</an></th>
    <th><a href="signup.php" style="text-decoration:none" class="b1 d">SIGN UP NOW</a></th>
  </tr>
  </table>

  <div class= "mytext"><h1>POPULAR CONCERTS</h1></div>

<?php
    
    $sql = 
    "SELECT customer_order.Concert_ID, COUNT(customer_order.Concert_ID), 
    concert.Concert_Name, concert.Concert_ID, concert.Img, 
    date.Date,
    location.Location_Name
    FROM (((customer_order 
    LEFT JOIN concert
    on customer_order.Concert_ID =  concert.Concert_ID)
    INNER JOIN date ON concert.Concert_ID = date.Concert_ID)
    INNER JOIN location ON concert.Concert_ID = location.Concert_ID)
    GROUP BY customer_order.Concert_ID HAVING COUNT(customer_order.Concert_ID) >='3'
    ";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) :
    // output data of each row
?>
<div class = "boxconcert">
    <div class= "rowconcert">  
    <?php
        while($row = $result->fetch_assoc()):
    ?>
           
           <div class = "columnconcert">
                    <div class = "concerticon">
                        <concert>
                            <a href= "toPay.php">
                            <img src=  "data: image/jpeg;base64, <?php echo base64_encode($row['Img'])?> ">
                            </a>
                            <p style="font-size:19px;">&nbsp; <?php echo $row['Concert_Name']?></p>
                            <p>&nbsp; <?php echo $row['Date']?></p>
                            
                            <p style ="color:gray;font-size:12px"><img src="img\map-locator.png" style="width:5%">&nbsp; <?php echo $row['Location_Name']?></p>
                            <?php    if ($row['Concert_ID']=='1') : ?>
                                <div class="btn-text-center"><a href="Login.php" align="center" class="button">BUY NOW</a></div>
                            <?php    else : ?>
                                <div class="btn-text-center"><a href="Login.php" align="center" class="button">BUY NOW</a></div>
                            <?php endif ?>    
                        </concert>
                    </div>
            </div> 
    <?php endwhile ?> 
    <?php    else : ?>
        <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
    <?php endif ?>     
    </div>    
</div>

<div class= "mytext"><h1>ALL CONCERTS</h1></div>
<?php
    
    $sql = 
    "SELECT concert.Concert_Name, concert.Concert_ID, concert.Img, 
    date.Date,
    location.Location_Name
    FROM ((concert 
    INNER JOIN date ON concert.Concert_ID = date.Concert_ID)
    INNER JOIN location ON concert.Concert_ID = location.Concert_ID)
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) :
    // output data of each row
?>
<div class = "boxconcert">
    <div class= "rowconcert">  
    <?php
        while($row = $result->fetch_assoc()):
    ?>
           
           <div class = "columnconcert">
                    <div class = "concerticon">
                        <concert>
                            <a href= "toPay.php">
                            <img src=  "data: image/jpeg;base64, <?php echo base64_encode($row['Img'])?> ">
                            </a>
                            <p style="font-size:19px;">&nbsp; <?php echo $row['Concert_Name']?></p>
                            <p>&nbsp; <?php echo $row['Date']?></p>
                            
                            <p style ="color:gray;font-size:12px"><img src="img\map-locator.png" style="width:5%">&nbsp; <?php echo $row['Location_Name']?></p>
                            <?php    if ($row['Concert_ID']=='1') : ?>
                                <div class="btn-text-center"><a href="Login.php" align="center" class="button">BUY NOW</a></div>
                            <?php    else : ?>
                                <div class="btn-text-center"><a href="Login.php" align="center" class="button">BUY NOW</a></div>
                            <?php endif ?>    
                        </concert>
                    </div>
            </div> 
    <?php endwhile ?> 
    <?php    else : ?>
        <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
    <?php endif ?>   
      
    </div>    
</div>

<div class="mytext" ><a href="selectconcert.php" align="center" class="button">VIEW ALL</a></div>
      </br></br></br></br>
    </div> 

   <div class="footer" >
   <footer><a href="yangmaidailogin.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:black;">help</p></footer>
   <footer><a href="contact.php"><p style="color:black;">Support</p></footer>
    </div> 
</body>
</html>