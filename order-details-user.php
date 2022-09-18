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
                <h6>order summary</h6>
                <ul>
                    <li>order_sid: <a href="#"></a></li>
                    <li>created_at</li>
                </ul>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">order-details_sid</th>
                            <th scope="col">product_sid</th>
                            <th scope="col">product_name</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total_price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li>total items: </li>
                    <li>order total: $</li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <?php
include __DIR__ . '/parts/scripts.php'; ?>
<?php
include __DIR__ . '/parts/html-foot.php'; ?>