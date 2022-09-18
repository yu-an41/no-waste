<?php
include __DIR__ . '/parts/connect_db.php';
// $pageName = 'orderDetails';
?>
<?php
include __DIR__ . '/parts/html-head.php'; ?>
<?php
include __DIR__ . '/parts/nav-bar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">order_sid</th>
                        <th scope="col">created_at</th>
                        <th scope="col">total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr scope="row">
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/parts/scripts.php'; ?>
<?php
include __DIR__ . '/parts/html-foot.php'; ?>