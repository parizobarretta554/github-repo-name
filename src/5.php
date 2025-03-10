<?php
$result = array();
$query = "SELECT * FROM users";
try {
  $statement = $pdo->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
} catch (PDOException $e) {
  echo 'There was an error: ' . $e->getMessage();
}
$json = json_encode($result, JSON_PRETTY_PRINT);
echo $json;
?>