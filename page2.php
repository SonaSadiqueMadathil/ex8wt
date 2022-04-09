<?php  
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page 2</title>
        
       
    </head>
    <body style="background-color:azure">
        
        <h1>Choose your favorite Harry Potter books:</h1>
        <form action="pageaction2.php" method="post">
            <h3>Select type of series:</h3><br>
            <img src="xh1.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Philosophers Stone"/> Harry Potter and the Philosopher's Stone - Rs. 500<br>
            <img src="xh2.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Chamber of Secrets"/> Harry Potter and the Chamber of Secrets - Rs.800 <br>
            <img src="xh3.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Prisoner of Azkaban"/>Harry Potter and the Prisoner of Azkaban Rs. 1000<br>
            <img src="xh4.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Goblet of Fire"/>Harry Potter and the Goblet of Fire - Rs. 1200<br>
            <img src="xh5.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Order of the Phoenix"/>Harry Potter and the Order of the Phoenix - Rs. 1500<br>
            <img src="xh6.jpg" width="10%"><br>
            <input type="radio" name="radio" value="Harry Potter and the Half-Blood Prince"/>Harry Potter and the Half-Blood Prince - Rs. 2000<br>
            
           
            <!--<h3>Select style of pizza:</h3><br>
            <input type="checkbox" name="check[]" value="Mexican"><label>Mexican Style Pizza</label>
            <br><input type="checkbox" name="check[]" value="American"><label>American Style Pizza</label>
            <br><input type="checkbox" name="check[]" value="Japanese"><label>Japanese Style Pizza</label>
            <br>-->
            <h3>Select number of books:</h3><br>
            <select name="amount">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            Address: <textarea name="addr"></textarea>
            <br>
             <input type="submit" name="submit1" />
        
        </form>
        
    </body>
</html>