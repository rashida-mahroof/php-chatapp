<?php
    session_start();
    include_once "config.php";
    $output = " ";
    $sql = mysqli_query($conn, "SELECT * FROM user");
    if(mysqli_num_rows($sql) == 1){
         $output .= "No users are available to chat";     //if no other users are notr available to chat,the only one is current logged in user
    }elseif(mysqli_num_rows($sql) > 1){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="">
                        <div class="content">
                            <img src="php/images/'.$row['image'].'" alt="">
                            <div class="details">
                                <span>' .$row['fname'] . " " .$row['lname']. '</span>
                                <p>This is test message</p>
                            </div>   
                        </div>
                        <div class="status-dot"><i class="fas fa-circle"></i></div>
                        </a>
                        ';
        }
    }
    echo $output; 
    ?>