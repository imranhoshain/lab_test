<?php
include_once '../include/header.php';
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
                    echo "<div class='alert alert-success'>".$_SESSION['store']."</div>";
                    session_unset();
                }
            ?>
        </div>
        <!-- /.row -->
        <div class="row">
           
            <div class="col-md-3 col-sm-6">
                <span class="thumbnail">
      			<img src="" alt="...">
      			<h4></h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
            </div>
            <p></p>
            <hr class="line">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="price">৳ </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="" target="_blank"> <button class="btn btn-info right" > Details</button></a>
                </div>

            </div>
            </span>
        </div>
             
    <!-- END PRODUCTS -->
    </div>
    <!-- /.row -->
    </div>

<?php
include_once '../include/footer.php';
?>