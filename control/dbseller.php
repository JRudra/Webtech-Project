<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bookshop"; //bookshop
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password,$type)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' AND type='". $type."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
    
function insert($conn, $table, $bookID, $bookName, $bookAuthor, $bookPublication, $bookGenre, $bookPrice, $bookPublished, $sellerName){
    
   
    
    $sql = "INSERT INTO ".$table." (BookID, BookName, Author, Publication, Genre, BookPrice, BookPublished, SellerName) VALUES('".$bookID."', '".$bookName."', '".$bookAuthor."', '".$bookPublication."', '".$bookGenre."', $bookPrice, '".$bookPublished."', '".$sellerName."')";
    
    
    if($conn->query($sql)!= TRUE){
        
        echo "error";
        
    }
    
    else{
        
        echo "New book inserted";
        
    }
    
    
    
}
    
function deliver_details($conn, $table, $orderID, $buyerName, $buyerPhone, $sellerName){



    $sql = "INSERT INTO ".$table." (OrderID, BuyerName, BuyerPhone, SellerName) VALUES('".$orderID."', '".$buyerName."', '".$buyerPhone."', '".$sellerName."')";



    if($conn->query($sql)!= TRUE){
        
        echo "error";
        
    }
    
    else{
        
        echo "New book inserted";
        
    }


}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>

