<?php

session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color:chocolate">
        <?php
         
               if(isset($_SESSION['status1'])){
                   echo "<p>".$_SESSION['status1']."</p>";
                   unset($_SESSION['status']);
               }
               #else{
                 #  echo "<p> THISSSSS</p>";
               #}
 ?>
      
    </body>
</html>