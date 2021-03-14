<?php
include ("../control/sessioncheck.php");
include ("../model/setconn.php");
$username=$_SESSION["username"];
$res= execute("select * from users where username='$username' ");
$row=$res->fetch_assoc();
$phone=$row["phoneno"];
$successmsg="";

if(isset($_POST["submit"]))
{
 
  $successmsg="<h4>Delivery has been successfully done</h4><h4>Delivery by $username</h4>
  <h4>Delivery guy phonenumber $phone</h4>";
}


?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
h4 {text-align: center;}
p {text-align: center;}
body {
  background-image: url('background/image5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h1>Delivery Guy Home Page</h1>

<p><a href="orderstatus.php">See pending Order</a></p>
<p><a href="dguyinfo.php">Show Profile information</a></p>
<h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>


   
</body>
</html>
