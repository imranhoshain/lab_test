<?php 
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar();
$product = $bazar->view($_GET['id']);
?>
<div id="page-wrapper" style="min-height: 349px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Product Details
                </div>
                <div class="panel-body">
                    <span class="thumbnail">
                    <img src="assets/admin/uploads/<?php echo $product['image'];?>" alt="...">
                    <h4><?php echo $product['name'];?></h4>
                    <div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <p>
                    <?php echo $product['detail'];?>
                </p>
                <hr class="line">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="price">৳
                            <?php echo $product['price'];?>
                        </p>
                    </div>

                </div>
                </span>
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer ">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <a href="view/admin/product/delete.php?id=<?php echo $product['unique_id'];?>" class="btn btn-danger">Delete</a>
                        <a href="view/admin/product/edit.php?id=<?php echo $product['unique_id'];?>" class="btn btn-primary">Edit</a>
                        <a href="index.php" class="btn btn-default">Back</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<?php
include_once '../include/footer.php';
?>