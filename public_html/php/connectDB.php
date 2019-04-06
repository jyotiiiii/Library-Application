<?php

const DB_DSN = 'mysql:host=localhost;dbname=library';
const DB_USER = 'jyoti';
const DB_PASS = 'XTdxq5wmGRx6EYJ9';
try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
} catch (PDOException $e) {
    die($e->getMessage());
}
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");

try {
    $stmt->execute($_GET);
} catch (PDOException $e) {
    echo $e->getMessage();
    $error = $e->errorInfo();
    die();
}
$user = $stmt->fetch(PDO::FETCH_BOTH);
//        echo "found $user['email']" :
        echo "could not find user's email";