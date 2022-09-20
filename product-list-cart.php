<?php
include __DIR__ . '/parts/connect_db.php';
$pageName = 'list';

$perPage = 4;
$page = isset($_GET['page'])? intval($_GET['page']): 1;
$cate = isset($_GET['cate'])? intval($_GET['cate']): 0;
$price = isset($_GET['price'])? intval($_GET['price']): 0;

$qsp = []; 
//qsp = query string parameters

$sql = "SELECT * FROM categories WHERE 1";
$cates = $pdo -> query($sql) -> fetchAll();
?>
<?php
include __DIR__ . '/parts/html-head.php'; ?>
<?php
include __DIR__ . '/parts/nav-bar.php'; ?>
<style>
    img {
        object-fit: cover;
        height: 160px;
    }
</style>
<div class="container">
    <div class="row d-flex flex-row">
        <div class="col mb-3" data_value = "">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <img src="https://pic.pimg.tw/borntoshop/1624378052-2230262190-g_wn.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">西西里咖啡</h5>
                    <p class="card-text flex-grow-1">清爽又可口，最適合讀書讀到頭昏腦脹的你^^</p>
                </div>
                <div class="w-75 d-flex flex-row  justify-content-between px-3 mb-4">
                    <select class="w-75 form-select">
                        <option selected>選擇數量</option>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <? endfor; ?>
                    </select>
                    <a href="#" class="btn btn-success">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <img src="https://www.acouplecooks.com/wp-content/uploads/2019/05/Chopped-Salad-001_1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">堅果生菜沙拉</h5>
                    <p class="card-text flex-grow-1">多吃蔬菜有益身體健康喔</p>
                </div>
                <div class="w-75 d-flex flex-row  justify-content-between px-3 mb-4">
                    <select class="w-75 form-select">
                        <option selected>選擇數量</option>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <? endfor; ?>
                    </select>
                    <a href="#" class="btn btn-success">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <img src="https://www.mos.com.tw/upload/product/20200424_094717_014.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">藜麥海洋珍珠堡</h5>
                    <p class="card-text flex-grow-1">香Q美味的藜麥米飯，搭配鮮蝦、干貝、墨魚等豐富的美味海鮮...？</p>
                </div>
                <div class="w-75 d-flex flex-row  justify-content-between px-3 mb-4">
                    <select class="w-75 form-select">
                        <option selected>選擇數量</option>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <? endfor; ?>
                    </select>
                    <a href="#" class="btn btn-success">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <img src="https://tokyo-kitchen.icook.network/uploads/recipe/cover/381066/157eaf40f08b2f15.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">焦糖肉桂捲</h5>
                    <p class="card-text flex-grow-1">不僅有超香濃的肉桂味，搭配著專屬調製焦糖淋醬的肉桂捲，光是看著就食指大動！</p>
                </div>
                <div class="w-75 d-flex flex-row  justify-content-between px-3 mb-4">
                    <select class="w-75 form-select">
                        <option selected>選擇數量</option>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <? endfor; ?>
                    </select>
                    <a href="#" class="btn btn-success">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include __DIR__ . '/parts/scripts.php'; ?>
<script>
    const fd = document.formProduct;

    function addToCart() {
        fetch('cart.php', {
                method: 'POST',
                body: fd,
            })
            .then(r => r.json())
            .then(obj => {
                console.log(obj);
            })

    }
</script>
<?php
include __DIR__ . '/parts/html-foot.php'; ?>