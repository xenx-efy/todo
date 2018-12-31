<?php
require_once 'dbconnect.php';

function pre($obj) {
    echo '<pre>';
    var_dump($obj);
    echo '</pre>';
}
$name = trim($_POST['nameValue']);
$email = trim($_POST['emailValue']);
$comment = trim($_POST['commentValue']);


$sql = "INSERT INTO comments (`email`, `comment`, `username`) VALUES ('$email', '$comment', '$name')";

if ($name and $email and $comment) {
    $pdo->query($sql);

    $card = "<div class=\"mt-3 child\">
    <div class=\"card\" style=\"width: 15rem;\">
        <div class=\"card-header text-center text-light bg-success\">
            $name
        </div>
        <div class=\"card-body\">
            <p class=\"font-weight-bold text-center\">$email</p>
            <p>$comment</p>
        </div>
    </div>
</div>";


    echo $card;
}

echo false;

