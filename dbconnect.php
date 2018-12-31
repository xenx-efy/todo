<?php

try {

    $pdo = new PDO('mysql:host=localhost;dbname=todo', 'root', 'qwer');
}
catch (PDOException $e) {
    echo 'Ошибка подключения к БД';
}


