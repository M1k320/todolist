<?php
$dsn = "mysql:host=localhost; dbname=todolist";
    $username = 'u8lequiy705eacm8';
    $password = 'cu1c97oi6oa2bf0v';

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  include('database_error.php');
  exit();
}
?>
