<?php

$pdo = new PDO('mysql:host=localhost; dbname=tagnawit; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('DELETE FROM tasswirit WHERE id=:id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('Location: /list.php');