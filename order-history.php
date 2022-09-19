<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'orderHistory';

$perPage = 5;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


$t_sql = "SELECT COUNT() FROM order-history";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

$totalPages = ceil($totalRows / $totalPages);

$rows = [];

if ($totalRows) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    $sql = sprintf(
        "SELECT FTOM order-history ORDER BY created_at LIMIT %s, %s",
        ($page - 1) * $perPage,
        $perPage
    );
    $rows = $pdo->query($sql)->fetchAll();
}

$output = [
    'totalRows' => $totalRows,
    'totalPages' => $totalPages,
    'page' => $page,
    'rows' => $rows,
    'perPage' => $perPage,
];

echo json_encode($output);
exit;
?>
<?php
include __DIR__ . '/parts/html-head.php'; ?>
<?php
include __DIR__ . '/parts/nav-bar.php'; ?>

<?php
include __DIR__ . '/parts/scripts.php'; ?>