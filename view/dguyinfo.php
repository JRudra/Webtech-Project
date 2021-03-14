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
<body>
<h2>Delivery Guy Profile Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Information are: 

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

if ($userQuery->num_rows > 0) {
  echo "<table><tr><th>First Name</th><th>Email</th><th>Address</th><th>Phone No</th><th>NID</th><th>Type</th><th>DOB</th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["phoneno"]."</td><td>".$row["nid"]."</td><td>".$row["type"]."</td><td>".$row["dob"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }



?>
<br/>
<br/>
<br/>
<a href="dguy.php">Delivery Guy Home Page</a>
<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>