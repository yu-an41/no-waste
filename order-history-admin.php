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
                            <th scope="col">
                                <i class="fa-solid fa-trash"></i>
                            </th>
                            <th scope="col">order_sid</th>
                            <th scope="col">member_sid</th>
                            <th scope="col">created_at</th>
                            <th scope="col">total</th>
                            <th scope="col">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
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