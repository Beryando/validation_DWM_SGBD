<?php

$pdo = new PDO('mysql:host=localhost; dbname=tagnawit; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM tasswirit');

$stmt->execute();
$tasswirit = $stmt->fetchAll(PDO::FETCH_ASSOC);