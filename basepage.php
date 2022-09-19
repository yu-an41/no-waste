<?php
include __DIR__ . '/parts/connect_db.php';
$pageName = 'base';
?>
<?php
include __DIR__ . '/parts/html-head.php'; ?>
<?php
include __DIR__ . '/parts/nav-bar.php'; ?>
<div class="container">
    <?php if (!empty($_SESSION['admin'])) : ?>
        <div class="row">
            <h5 class="h-100 text-center mb-3">\ 歡迎回家，惜食守衛隊！/</h5>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">商品</h5>
                        <a href="#" class="btn btn-primary">新增商品</a>
                        <a href="#" class="btn btn-primary">商品列表</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">活動</h5>
                        <a href="#" class="btn btn-primary">新增活動</a>
                        <a href="#" class="btn btn-primary">活動列表</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">論壇</h5>
                        <a href="#" class="btn btn-primary">新增文章</a>
                        <a href="#" class="btn btn-primary">文章列表</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">商家會員</h5>
                        <a href="#" class="btn btn-primary">會員列表</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">一般會員</h5>
                        <a href="#" class="btn btn-primary">會員列表</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">訂單</h5>
                        <a href="order-history-admin.php" class="btn btn-primary">訂單列表</a>
                        <a href="order-details-admin.php" class="btn btn-primary">訂單明細</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 d-flex flex-column align-items-center">
                <h5>There's nothing here!</h5>
                <p>歡迎點擊下方按鈕，或從上方選單導覽列逛逛本站！</p>
                <button type="submit" class="btn btn-info mb-2">我想逛商品</button>
                <br>
                <button type="submit" class="btn btn-info mb-2">我想成為會員</button>
                <br>
                <button type="submit" class="btn btn-info mb-2">我想加入商家</button>
            </div>
        </div>
    <?php endif ?>
</div>

<?php
include __DIR__ . '/parts/scripts.php'; ?>
<?php
include __DIR__ . '/parts/html-foot.php'; ?>