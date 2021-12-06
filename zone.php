<?php 
   
    include('server.php'); 
    
?>
<?php 
   
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
	        /*position:fixed;*/
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
        color: #b6b6b6;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        
        }
        h6 {
        color: #b6b6b6;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        
        }
        .box {
            float: center;
            width: 50%;
            margin:auto;
            }

    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size:16px;
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
  height: 900px; /* Should be removed. Only for demonstration */
}
.column2 {
  float: left;
  width: 50%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.block-0 {
	
	height: 50px;
	background: #0E9F98;
	margin:auto;
}
.block-1 {
	width: 75px;
	height: 130px;
	background: #00BFFF;
	float: left;
    margin: 7px;
}
.block-2 {
	
	height: 100px;
	margin: 7px;
	background: #FFFF33;
    float: auto;
	
}
.block-3 {
	width: 75px;
	height: 130px;
	margin: 7px;
	background:	#FF0000 ;
	float: left;
}

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
  width: 80%;
  height: 85%;
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

.buy {
               display: block;
               width: 110px;
               font-size: 12px;
               font-weight: bold;
               background-color: #878787;
               padding: 0 18px;
               line-height: 30px;
               border-radius: 15px;
               color: #fff;
               text-decoration: none;
               float: right;
            }

            
            .seatSelection {
  text-align: center;
  padding: 5px;
	margin: 15px;}

.seatsReceipt {text-align: center;}

.seatNumber {
	display: inline;
	padding: 10px;
	background-color: #5c86eb;
	color: #FFF;
	border-radius: 5px;
	cursor: default;
	height: 25px;
	width: 25px;
	line-height: 25px;
	text-align: center;
 }

.seatRow {padding: 10px;}

.seatSelected {
	background-color: lightgreen;
	color: black;
 }

.seatUnavailable {background-color: gray;}

.seatRowNumber {
	clear: none;
	display: inline;
 }

.hidden {display: none;}

.seatsAmount {max-width: 2em;}



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
<th><div class="dropdown">   
<button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
  <a href="editprofile.php">Edit Profile</a>
  <a href="myticket.php">My Tickets</a>
  <a href="mypurchases.php">My Purchases</a>
  </div>
</div></th>
<!--    <th><input type="button" value="PROFILE"></th>-->
    <th><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
  <?php $row = $result->fetch_assoc() ?>
  <?php $row1 = $result1->fetch_assoc() ?>

  <h4 style="text-indent: 5em;"><?php echo $row['Concert_Name']; ?>&nbsp;&nbsp;&nbsp; <button class="button"onclick="location.href='detailticket.php'">MORE DETAIL</button></h4>
    <div class="row">
    <div class="column" style="background-color: white;">
        <p style="text-indent: 9em;">&nbsp;&nbsp;&nbsp;<img id="myBtn" src="image/zone.png "></p>
    </div>
    
    <div class="column" style="background-color:white;">
       <br /><br /><br /><br /><br /><br />
        <img src="image/-genelabcon-price.jpg " width="300" height="200">
        <h4 style="text-indent: 1em;">Select Zone</h4>
        <h5 style="text-indent: 3em;">that you want to sit </h5>
        
      

                <!-- The Modal -->
         <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="row">
                   
                        <div class="column2" style="background-color: white;">
                        <h2>ZONE:<?php echo $row1['Zone']; ?></h2>
                        <h3>Price : <a><?php echo $row1['Price']; ?> ฿</a></h3>
                        <a><div    class=" seatNumber ">&nbsp&nbsp&nbsp</div><p>Available </p></a>
                        <a><div    class=" seatNumber seatUnavailable">&nbsp&nbsp&nbsp</div><p>Not Available </p></a>
                        <a><div    class=" seatNumber seatSelected">&nbsp&nbsp&nbsp</div><p>Booked </p></a>
                        <!--<p>
                        <label for="tickets_quantity"># Tickets</label>
                        <input type="number" min="1" name="tickets_quantity" id="tickets_quantity" required />
                        </p>-->
                        <!--<p>random seats number :</p>
                        <p style ="color:red"> <?php echo $row1['SeatNum']; ?></p>
                        <p>Price :</p>
                        <p style ="color:red"> <?php echo $row1['Price']; ?> THB</p>
        
                        <p class="buy" href="#"onclick="location.href='ordercheckout.php'">CONTINUE</p>-->

                 
                        </div>

                        <div class="column2" style="background-color: white;">
                        
                        <div class="seatSelection col-lg-12">
                        
                        <div class="seatsChart col-lg-6">
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 1
                                </div>
                                <div id="1_1" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">&nbsp 1</div>
                                <div id="1_2" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber "> &nbsp2</div>
                                <div id="1_3" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber "> &nbsp3</div>
                                <div id="1_4" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber "> &nbsp4</div>
                                <div id="1_5" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">&nbsp 5</div>
                                <div id="1_6" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  "> &nbsp6</div>
                                <div id="1_7" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber "> &nbsp7</div>
                                <div id="1_8" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable "> &nbsp8</div>


                            </div>
                            <br/>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 2
                                </div>
                                <div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">&nbsp9</div>
                                <div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">10</div>
                                <div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">11</div>
                                <div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">12</div>
                                <div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">13</div>
                                <div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable ">14</div>
                                <div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">15</div>
                                <div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">16</div>

                            </div>
                            <br/>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 3
                                </div>
                                <div id="3_1" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">17</div>
                                <div id="3_2" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">18</div>
                                <div id="3_3" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">19</div>
                                <div id="3_4" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">20</div>
                                <div id="3_5" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">21</div>
                                <div id="3_6" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">22</div>
                                <div id="3_7" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">23</div>
                                <div id="3_8" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">24</div>

                            </div>
                            <br/>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 4
                                </div>
                                <div id="4_1" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">25</div>
                                <div id="4_2" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">26</div>
                                <div id="4_3" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">27</div>
                                <div id="4_4" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">28</div>
                                <div id="4_5" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">29</div>
                                <div id="4_6" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">30</div>
                                <div id="4_7" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">31</div>
                                <div id="4_8" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">32</div>

                            </div>
                            <br/>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 5
                                </div>
                                <div id="5_1" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">33</div>
                                <div id="5_2" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">34</div>
                                <div id="5_3" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">35</div>
                                <div id="5_4" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">36</div>
                                <div id="5_5" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">37</div>
                                <div id="5_6" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">38</div>
                                <div id="5_7" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">39</div>
                                <div id="5_8" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">40</div>
                            </div>
                        </div>
                        
                        <div class="seatsReceipt col-lg-2">
                            <p><strong>Selected Seats: <span class="seatsAmount" />0 </span></strong> <button id="btnClear" class="btn">Clear</button></p>
                            <ul id="seatsList" class="nav nav-stacked"></ul>
                            <p class="buy" href="#"onclick="location.href='ordercheckout.php'">CONTINUE</p>

                        </div>
                        
                    </div>

                    
                
                
                </div>

				
                        

                        
                       
            
                        
                </div>

         </div>
         
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


                //seat
                

                </script>
                <script>
	 // Clicking any seat
	 $(".seatNumber").click(
        function () {
            if (!$(this).hasClass("seatUnavailable")){
                // If selected, unselect it
                if ($(this).hasClass("seatSelected")) {
                    var thisId = $(this).attr('id');
                    var price = $('#seatsList .' + thisId).val();
                    $(this).removeClass("seatSelected");
                    $('#seatsList .' + thisId).remove();
                    // Calling functions to update checkout total and seat counter.
                    removeFromCheckout(price);
                    refreshCounter();
                }
                else {
                    // else, select it
                    // getting values from Seat
                    var thisId = $(this).attr('id');
                    var id = thisId.split("_");
                    var price = $(this).attr('value');
                    var seatDetails = "Row: " + id[0] + "Seat:  " + id[1] + " Price:" + price+"1200THB";
                    
                   
                    var freeSeats = parseInt($('.freeSeats').first().text());
                    var selectedSeats = parseInt($(".seatSelected").length);
                    
                    // If you have free seats available the price of this one will be 0.
                    if (selectedSeats < freeSeats) {
                        price = 0;
                    }

                    // Adding this seat to the list
                    var seatDetails = "Row: " + id[0] + "Seat:" + id[1] + " Price:" +"1200THB";
                    $("#seatsList").append('<li value=' + price + ' class=' + thisId + '>' + seatDetails + "  </li>");
                    $(this).addClass("seatSelected");
                    
                    
                    refreshCounter();
                }
            }
        }
    );
    // Clicking any of the dynamically-generated X buttons on the list
    
    // Show tooltip on hover.
    $(".seatNumber").hover(
        function () {
            if (!$(this).hasClass("seatUnavailable")) {
                var id = $(this).attr('id');
                var id = id.split("_");
                var price = $(this).attr('value');
                var tooltip = "Row: " + id[0] + " Seat:" + id[1] + " Price:CA$:" + price;

                $(this).prop('title', tooltip);
            } else
            {
                $(this).prop('title', "Seat unavailable");
            }
        }
        );
    // Function to refresh seats counter
    function refreshCounter() {
        $(".seatsAmount").text($(".seatSelected").length); 
    }
    // Add seat to checkout
    function addToCheckout(thisSeat) {
        var seatPrice = parseInt(thisSeat);
        var num = parseInt($('.txtSubTotal').text());
        num += seatPrice;
        num = num.toString();
        $('.txtSubTotal').text(num);
    }
    // Remove seat from checkout
    function removeFromCheckout(thisSeat) {
        var seatPrice = parseInt(thisSeat);
        var num = parseInt($('.txtSubTotal').text());
        num -= seatPrice;
        num = num.toString();
        $('.txtSubTotal').text(num);
    }

    // Clear seats.
    $("#btnClear").click(
        function () {
            $('.txtSubTotal').text(0);
            $(".seatsAmount").text(0);
            $('.seatSelected').removeClass('seatSelected');
            $('#seatsList li').remove();
        }
    );
</script>

                
      
    
    
    </div>
    
    </div>


    

    <!-- <div style ="height:200px"> </div> -->
    
    
    <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>>
    
</body>
</html>