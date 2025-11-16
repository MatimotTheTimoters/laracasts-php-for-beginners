<?php

require 'functions.php';

// require 'router.php';

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4';
$username = 'root';

$pdo = new PDO($dsn, $username);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}