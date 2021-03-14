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
<h2>Book Lists</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>All available books: 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th><th>Book Name</th><th><th>Author</th><th>Publication</th><th>Genre</th><th>Book Price</th><th><th>Published date</th><th><th>Seller Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BookID"]."</td><td><td>".$row["BookName"]."</td><td><td>".$row["Author"]."</td><td>".$row["Publication"]."</td><td>".$row["Genre"]."</td><td>".$row["BookPrice"]."</td><td><td>".$row["BookPublished"]."</td><td><td>".$row["SellerName"]."</td><td>";
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
<legend align="left"><b> Buy Book</b></legend>
<br>
<tr>
<form method="post" action="../databasecreation/buyerrequest.php"   enctype="multipart/form-data">
<td><label for="BookName">Book Name: </label></td> 
<td><input type="text" name="BookName" required><br></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerName">Buyer Name:</label></td>
<td><input type="text" name="BuyerName" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="BuyerPhoneNumber">Buyer Phone no:</label></td>
<td><input type="text" name="BuyerPhoneNumber" required></td>
</tr>
<br>
<hr>
<tr>
<td><label for="SellerName">Seller Name</label></td>
<td><input type="text" name="SellerName" required></td>
</tr>

<input type="submit">

<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>