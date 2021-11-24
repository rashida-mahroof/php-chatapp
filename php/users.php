<?php
    session_start();
    include_once "config.php";
    $output = " ";
    $sql = mysqli_query($conn, "SELECT * FROM user");
    if(mysqli_num_rows($sql) == 1){
         $output .= "No users are available to chat";     //if no other users are notr available to chat,the only one is current logged in user
    }elseif(mysqli_num_rows($sql) > 1){
        include "data.php";
    }
    echo $output; 
    ?>