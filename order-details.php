<?php include __DIR__ . './parts/connect-db.php';

$pageName = 'orderDetails';

?>
<?php include __DIR__ . './parts/html-head.php'; ?>
<?php include __DIR__ . './parts/nav-bar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">
                            
                        </a>
                
                </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            <i class="fa-solid fa-trash"></i>
                        </th>
                        <th scope="col">order_details_sid</th>
                        <th scope="col">created_at</th>
                        <th scope="col">product_sid</th>
                        <th scope="col">product_name</th>
                        <th scope="col">quantity</th>
                        <th scope="col">item_total</th>
                        <th scope="col">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php for ($i = 1; $i <= $totalRows; $i++) : ?>
                            <th scope="row">
                            </th>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </td>
                        <? endfor; ?>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . './parts/scripts.php'; ?>
<?php include __DIR__ . './parts/html-foot.php'; ?>