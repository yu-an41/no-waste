<?php
include __DIR__ . '/parts/connect_db.php';
$pageName = 'cart';

if(! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>
<?php
include __DIR__ . '/parts/html-head.php'; ?>
<?php
include __DIR__ . '/parts/nav-bar.php'; ?>
<div class="container">
    <div class="row d-flex flex-column align-items-end">
        <h4 class="text-center mb-3">我的購物車</h4>
        <div class="col-sm-6 col-md-4 col-lg3 col-xl-2 mb-3">
            <button type="button" class="btn btn-danger">清空購物車</button>
        </div>
        </row>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">項次</th>
                            <th scope="col">商品名稱</th>
                            <th scope="col">數量</th>
                            <th scope="col">小計</th>
                            <th scope="col">
                                刪除商品</i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php for ($i = 1; $i <= $totalRows; $i++) : ?>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            <?php endfor; ?>
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