


<?php
    define("SERVER","localhost");
    define("USER","DHS");
    define("PASSWORD","Dhananjay@10");
    define("DB","cms");
    $connection=mysqli_connect(SERVER,USER,PASSWORD,DB);
    
    if($connection){
       // echo "We are connected!!";
    }
?>