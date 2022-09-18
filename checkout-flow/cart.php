<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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
    <div class="container">
        <div class="row">
            <div class="col">
                <h6>my cart</h6>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">order-details_sid</th>
                            <th scope="col">product_name</th>
                            <th scope="col">quantity</th>
                            <th scope="col">unit_price</th>
                            <th scope="col">total_price</th>
                            <th scope="col">
                                <i class="fa-solid fa-trash"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr scope="row">
                            <td>0053</td>
                            <td>漢堡</td>
                            <td>
                                <i class="fa-solid fa-minus"></i>
                                5
                                <i class="fa-solid fa-plus"></i>
                            </td>
                            <td>$20</td>
                            <td>$100</td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr scope="row">
                            <td>0053</td>
                            <td>漢堡</td>
                            <td>
                                <i class="fa-solid fa-minus"></i>
                                5
                                <i class="fa-solid fa-plus"></i>
                            </td>
                            <td>$20</td>
                            <td>$100</td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li>total items: </li>
                    <li>order total: $</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <button type="button" class="btn btn-primary">checkout</button>
            </div>
        </div>
    </div>
</body>

</html>