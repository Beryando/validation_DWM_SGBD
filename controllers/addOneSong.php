<?php

$pdo = new PDO('mysql:host=localhost; dbname=tagnawit; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('INSERT INTO tasswirit (title, saint_master, element, color_suites) 
    VALUES (:title, :saint_master, :element, :color_suites)');
$stmt->bindParam(':title', $_POST['title']);
$stmt->bindParam(':saint_master', $_POST['saint_master']);
$stmt->bindParam(':element', $_POST['element']);
$stmt->bindParam(':color_suites', $_POST['color_suites']);
$stmt->execute();

header('Location: /list.php');