<?php

$pdo = new PDO('mysql:host=localhost; dbname=tagnawit; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM tasswirit WHERE id=:id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();
$tasswirit = $stmt->fetch(PDO::FETCH_ASSOC);