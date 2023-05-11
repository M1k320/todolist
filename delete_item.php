<?php
require_once('database.php');

//get data
$item_num = filter_input(INPUT_POST, 'item_num', FILTER_VALIDATE_INT);

//delete item
if ($item_num != false) {
    $query = 'DELETE FROM todoitems 
              WHERE ItemNum = :item_num';
    $statement = $db->prepare($query);
    $statement->bindValue(':item_num', $item_num);
    $success = $statement->execute();
    $statement->closeCursor();    
}

//display items
include('index.php');
?>
