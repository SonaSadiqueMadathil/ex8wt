<?php


session_start();

$username=$_SESSION['user'];
$address=$_POST['addr'];

$choice=$_POST['radio'];
$selected=$_POST['amount'];

$amount=0;

if($choice === 'Harry Potter and the Philosophers Stone')
{
    $amount=500*$selected;
}
else if($choice === 'Harry Potter and the Chamber of Secrets')
{
    $amount=800*$selected;
}
else if($choice === 'Harry Potter and the Prisoner of Azkaban')
{
    $amount=1000*$selected;
}
else if($choice === 'Harry Potter and the Goblet of Fire')
{
    $amount=1200*$selected;
}
else if($choice === 'Harry Potter and the Order of the Phoenix')
{
    $amount=1500*$selected;
}
else if($choice === 'Harry Potter and the Half-Blood Prince')
{
    $amount=2000*$selected;
}
else
{
    $amount=5000*$selected;
}

//"<h1> Order Summary </h1><br>Name:".$_SESSION['name']."<br>Address=".$address."<br> Choice:".$choice."<br> Number:".$selected."<br> Total amount: ".$amount;
    //header('location:page3.php');

$str="<h1>Order Summary</h1><br>Name: ".$_SESSION['name']."<br>Address: ".$address."<br><table><tr><th>Item Description</th>"
        . "<th>Quantity</th><th>Amount</th></tr><tr><td>".$choice."</td><td>".$selected."</td><td>".$amount."</td></tr></table>";

 $_SESSION['status1']=$str;
 header('location:page3.php');

?>