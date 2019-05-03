<?php

$pdo = new PDO('mysql:host=localhost; dbname=tagnawit; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare(
    'UPDATE tasswirit 
    SET title=:title, saint_master=:saint_master, element=:element, color_suites=:color_suites
    WHERE id=:id');
$stmt->bindParam(':title', $_POST['title']);
$stmt->bindParam(':saint_master', $_POST['saint_master']);
$stmt->bindParam(':element', $_POST['element']);
$stmt->bindParam(':color_suites', $_POST['color_suites']);
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('Location: /list.php');