<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h2>Order Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>Pending Orders:

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"buyerrequest");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Order Id</th><th><th> Buyer Name</th><th><th>Buyer Phone no</th><th>Seller Name</th><th>Bookname</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["OrderId"]."</td><td><td>".$row["BuyerName"]."</td><td><td>".$row["BuyerPhoneNumber"]."</td><td>".$row["SellerName"]."</td><td>".$row["BookName"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>
<br>

  <fieldset>
  <fieldset>			
<legend align="left"><b>Order Processing Section</b></legend>
<br>
<tr>
<form method="post" action="../databasecreation/orderstatusinput.php"   enctype="multipart/form-data">
<td><label for="orderId">Oder ID: </label></td> 
<td><input type="text" name="oderId" required><br></td>
</tr>
<br>
<hr>
<tr>
Status: <select name="status" >
				<option value="Done"  selected >Done</option>
				<option value="Pending">Pending</option><br/>
			
</tr>
<br>
<input type="submit">

<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>