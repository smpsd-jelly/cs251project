<?php 
    session_start();
    require_once('server.php');
    $errors = array();

    
    $name = $_SESSION['username'];  
    
    $search =  mysqli_real_escape_string($_REQUEST['search']);
    $sql = "SELECT concert.Concert_ID, concert.Concert_Name, artist.Artist_Name
    FROM concert
    LEFT JOIN artist
    ON concert.Concert_ID = artist.Concert_ID
    WHERE Concert_Name LIKE '%".$search."%' OR Artist_Name LIKE '%".$search."%'";
    $r_query = mysql_query($sql);

    while ($row = mysql_fetch_array($r_query)){  
        echo "success";
    }
    
?>