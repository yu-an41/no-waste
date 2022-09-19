<?php
require __DIR__ . '/parts/connect_db.php';

$postData = [
    'order_sid' => 2,
    'product_sid' => 35,
    'product_name' => '西西里咖啡',
    'quantity' => 3,
    'total_price' => 150,
];

$sql = "INSERT INTO `order-details`(
    `order_sid`, `product_sid`, `product_name`, `quantity`, `total_price`
) VALUE(
    ?, ?, 
    ?, ?, ?
)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $postData['order_sid'],
    $postData['product_sid'],
    $postData['product_name'],
    $postData['quantity'],
    $postData['total_price'],
]);

echo $stmt->rowCount();
