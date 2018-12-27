<?php
require_once 'dbconnect.php';

function pre($obj) {
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';
}
var_dump($_POST);
$name = $_POST['nameValue'];
$email = $_POST['emailValue'];
$comment = $_POST['commentValue'];
$sql = "INSERT INTO comments (`email`, `comment`, `username`) VALUES ('$email', '$comment', '$name')";

$statment = $pdo->query($sql);
//$data = $statment->fetchAll(PDO::FETCH_OBJ);
pre($statment);
