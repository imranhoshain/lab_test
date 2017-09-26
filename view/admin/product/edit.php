<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$bazar = new App\admin\bazar\Bazar;
$product = $bazar->view($_GET['id']);
?>>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Product</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Basic Product Add Form
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form action="view/admin/product/update.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Product Title</label>
                                        <input type="text" value="<?php echo $product['name']; ?>" name="name" class="form-control">
                                        <input type="hidden" value="<?php echo $product['id']; ?>" name="id" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" value="<?php echo $product['price']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="gender" class="form-control">
                                            <option>Select One</option>                                            
                                            <option <?php echo($product['gender']=='male')?'selected':'';?> value="male">male</option>
                                            <option <?php echo($product['gender']=='female')?'selected':'';?> value="female">female</option>
                                            <option <?php echo($product['gender']=='baby')?'selected':'';?> value="baby">baby</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="detail" rows="3"><?php echo $product['detail']; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Image</label><br>
                                        <img src="view/admin/product/img/<?php echo $product['image'] ?>" alt="" width="100"><br>
                                        <input type="file" name="image"/>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
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