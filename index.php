<!DOCTYPE html>
<?php
    session_start()
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Page 1</title>
        
        
    </head>
    <body>
        
        <h1>Log In</h1>
        
        <form action="pageaction1.php" method="post">
            <fieldset style="background-color:azure">
               Username: <input type="text" name="username" /><br>
            Password: <input type="password" name="password" /><br>
            <input type="submit" name="submit" />
            </fieldset>
            
        </form>
    </body>
</html>


 <?php
               if(isset($_SESSION['status'])){
                   echo "<p>".$_SESSION['status']."</p>";
                   unset($_SESSION['status']);
               }
               
 ?>