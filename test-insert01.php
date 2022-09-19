<?php
require __DIR__ .'/parts/connect_db.php';

$postData = [
    'total' => 160,
    'member_sid' => 384,
];

$sql = "INSERT INTO `order-history`(`total`, `member_sid`) 
VALUES (?, ?)";

$stmt = $pdo -> prepare($sql);

$stmt -> execute([
    $postData['total'],
    $postData['member_sid'],
]);

echo $stmt -> rowCount();


