<?php
require __DIR__ . '/parts/connect_db.php';

$postData = [
    'order_sid' => 2,
    'product_sid' => 57,
    'product_name' => '堅果生菜沙拉',
    'quantity' => 2,
    'total_price' => 90,
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
