<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$data = $bazar->index();
?>
    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Product</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div style="position: fixed; z-index: 99999; right: 50px; top:50px">
            <?php                 
               if(isset($_SESSION['store'])){
                   echo "<div class='alert alert-success'>" .$_SESSION['store']. "</div>";
                   session_unset();
               }
                if(isset($_SESSION['delete'])){
                    echo "<div class='alert alert-success'>" .$_SESSION['delete']. "</div>";
                    session_unset();
                }
            if(isset($_SESSION['update'])){
                    echo "<div class='alert alert-success'>" .$_SESSION['update']. "</div>";
                    session_unset();
                } 
               ?>
        </div>
        <!-- /.row -->
        <div class="row">
            <?php
                 $sl=0;
                foreach($data as $product){
                $sl++;
            ?>
                <div class="col-md-3 col-sm-6">
                    <span class="thumbnail layer">
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
                    <div class="col-md-6 col-sm-6">
                        <a href="view/admin/product/view.php?id=<?php echo $product['unique_id'];?>"> <button class="btn btn-info right"> Details</button></a>
                    </div>

                </div>
                </span>
        </div>
        <?php }?>
        <!-- END PRODUCTS -->
    </div>
    <!-- /.row -->
    </div>

    <?php
include_once '../include/footer.php';
?>