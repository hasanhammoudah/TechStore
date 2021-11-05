<?php
session_start();
include "include/header.php";
include "include/sidebar.php";
?>
<?php
include "start_content.php";


?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">New Admin</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <?php
                                if(isset($_SESSION['success'])){?>
                                    <div class="alert alert-success">
                                
                                <?php echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                                    </div><?php }?>
                                <form method="POST" action="handlers/add_admin.php">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Admin</h3>
                                    </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="adminName">Admin Name</label>
                                                <input type="text" name="name" class="form-control" id="adminName" placeholder="Admin Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="adminEmail">Email</label>
                                                <input type="email" name="email" class="form-control" id="adminEmail" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="adminPassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control" id="adminPassword" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="type">admin type</label>
                                                <select name="type" class="form-control" id="type">
                                                    <option value="0">supervisor</option>
                                                    <option value="1">super admin</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="status">admin status</label>
                                                <select name="status" class="form-control" id="status">
                                                    <option value="0">deactived</option>
                                                    <option value="1">actived</option>
                                                </select>
                                            </div>
                                            <!-- /.card-body -->


                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                    <!-- /.card -->



                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>


<?php
include "include/footer.php";

?>