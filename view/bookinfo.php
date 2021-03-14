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

<h3>Hi, <?php echo $_SESSION["username"];?></h3>
<br/>All available books: 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th>Book Name</th><th>Author</th><th>Publication</th><th>Genre</th><th>Book Price</th><th>Book Published date</th><th>Seller Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["BookID"]."</td><td>".$row["BookName"]."</td><td>".$row["Author"]."</td><td>".$row["Publication"]."</td><td>".$row["Genre"]."</td><td>".$row["BookPrice"]."</td><td>".$row["BookPublished"]."</td><td>".$row["SellerName"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>

<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>