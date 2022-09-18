<?php if (!isset($_SESSION)) {
    session_start();
}
?>
<style></style>
    nav.navbar .nav-item .nav-link.active {
        background-color: lightblue;
        color: white;
        font-weight: bold;
        border-radius: 10px;
    }
</style>
<div class="container mb-3">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $pageName == 'base' ? 'active' : '' ?>" href="basepage.php">首頁</a>
                    </li>
                    <li class="nav-item <?= $pageName == 'store' ? 'active' : '' ?>">
                        <a class="nav-link" href="#">商家</a>
                    </li>
                    <li class="nav-item <?= $pageName == 'product' ? 'active' : '' ?>">
                        <a class="nav-link" href="#">商品</a>
                    </li>
                    <li class="nav-item <?= $pageName == 'event' ? 'active' : '' ?>">
                        <a class="nav-link" href="#">活動</a>
                    </li>
                    <li class="nav-item <?= $pageName == 'forum' ? 'active' : '' ?>">
                        <a class="nav-link <?= $pageName == 'product' ? 'active' : '' ?>" href="#">論壇</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php if (empty($_SESSION['user1'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login-api.php">登入</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">註冊</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-regular fa-cart-shopping"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><?= $_SESSION['user1']['nickname'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">登出</a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>
</div>