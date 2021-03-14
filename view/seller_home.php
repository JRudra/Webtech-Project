<?php

session_start(); 

include('../control/dbseller.php');
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

   $sellerName=$_SESSION["username"];
if ($userQuery->num_rows > 0) {

// output data of each row
while($row = $userQuery->fetch_assoc()) {
    
    $sellerEmail=$row["email"];
    $sellerContact =$row["phoneno"];  
}

} else {
echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller - Home</title>
    <style>
h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>

<body>
    <fieldset>
    
        
        <legend><h1>Seller Home</h1></legend>
        <b>Username:</b><?php echo $_SESSION["username"]?> <br>
        <b>Email:</b><?php echo $sellerEmail?><br>
        <b>Contact No:</b><?php echo $sellerContact ?><br>
        
        <form action="../control/seller_adding_book.php" method="post">
            
            <fieldset>
                
                <legend><b>Book Registration</b></legend>
                
                Book Id: <input type="text" name="bookId" required><?php if(isset($_SESSION["empty"])){echo $_SESSION["empty"];unset($_SESSION["empty"]);} ?> <br> <br>
                Book Name: <input type="text" name="bookName" required> <br> <br>
                Author: <input type="text" name="bookAuthor" required> <br> <br>
                Publication: <input type="text" name="bookPublication" required> <br> <br>
                Genre: <select name="bookGenre" >
				<option value="Select"  selected >Select</option>
                <option value="Biography"  >Biography</option>
                <option value="Educational">Educational</option>
				<option value="Thriller">Thriller</option>
				<option value="Drama">Drama</option>
				<option value="Sci-Fiction">Sci-Fiction</option>
				<option value="Fantasy">Fantasy</option>
			</select><br><br> 
                Book Price: <input type="number" name="bookPrice" required><br><br>
                Book Published: <input type="date" name="bookPublished" required><br><br>
                Seller Name: <input type="text" name="sellerName" required> <br> <br>
                <a href="../control/seller_adding_book.php"><input type="submit" name="add" value="Add Book"></a>
                <input type="Reset"> <br>
            </fieldset>
            <p><a href="bookinfo.php">Show Inventory</a></p>
            <h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>
            
        </form>
        <br>
       
        </fieldset>

</body>
</html>