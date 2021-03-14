<?php
include('dbseller.php');
if(isset($_REQUEST['add'])){
    
    if(!empty($_REQUEST['bookId']) and !empty($_REQUEST['bookName']) and !empty($_REQUEST['bookAuthor'])
      and !empty($_REQUEST['bookPublication']) and !empty($_REQUEST['bookGenre']) and !empty($_REQUEST['bookPrice'])
      and !empty($_REQUEST['bookPublished'])){
        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->insert($conn, "inventory", $_REQUEST['bookId'], $_REQUEST['bookName'], $_REQUEST['bookAuthor'],
                           $_REQUEST['bookPublication'], $_REQUEST['bookGenre'], $_REQUEST['bookPrice'], $_REQUEST['bookPublished'], 
                           $_REQUEST['sellerName']);
        
    }
    
}

?>