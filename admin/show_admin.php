<?php
session_start();
include "include/header.php";
include "include/sidebar.php";
include "handlers/connect.php";
include "handlers/get_admins.php";
?>
<div class="content-wrapper" style="min-height: 685px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <?php
        if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">

                <?php echo $_SESSION['success'];
                    unset($_SESSION['success']); ?>

            </div>
        <?php } ?>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Show Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">show admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="card">

        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">#id</th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" aria-sort="descending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    foreach ($admins as $index => $admin) { ?>
                                <tr>
                                    <td>
                                        <?php echo $index  ?>
                                    </td>
                                    <td>
                                        <?= $admin[1] ?>
                                    </td>
                                    <td>
                                        <?= $admin[2] ?>
                                    </td>

                                    <td>
                                        <?php
                                            if ($admin[4] == 0) { ?>
                                            <span class="badge badge-pill badge-danger">غير مفعل</span>

                                        <?php  } else { ?>
                                            <span class="badge badge-pill badge-success">مفعل</span>

                                        <?php }

                                            ?></td>
                                    <td>
                                        <?php
                                            if ($admin[5] == 0) {
                                                echo "supervisor";
                                            } else {
                                                echo "super admin";
                                            }

                                            ?>
                                    </td>

                                    <td>
                                        <button type="button" data-id="<?= $admin['0']  ?>" class="btn btn-primary edit-admin" data-toggle="modal" data-target="#exampleModal">
                                            <i data-id="<?= $admin['0']  ?>" class="fas fa-edit"></i>
                                        </button>
                                        <button data-id="<?= $admin['0']  ?>" class="btn btn-danger delete-admin" title="delete data" data-toggle="tooltip" data-placement="top">
                                            <i data-id="<?= $admin['0']  ?>" class="fas fa-trash"></i>
                                        </button>
                                    </td>

                                </tr>


                            <?php }
                            ?>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include "include/footer.php";   ?>


<script>
    $(".edit-admin").click(function(e) {
        e.preventDefault(e);
        let element = e.target;
        let id = element.getAttribute('data-id');
        //console.log(id);





        $.ajax({
            type: "get",
            url: "get_admin_data.php",
            dataType: "json",
            data: {
                id: id
            },
            success: function(data) {
                $("#id").val(data.id);
                $("#adminName").val(data.name);
                $("#adminEmail").val(data.email);
                console.log(data);
            },
        });

    });



    $(".delete-admin").click(function(e) {
        e.preventDefault();
        let element = e.target;
        let id = element.getAttribute('data-id');
        //console.log(id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                            type: "post",
                            url: "delete_admin_data.php",
                            dataType: "json",
                            data: {
                                id: id
                            },
                            success: function(data) {
                           $(`button[data-id=${data}]`).closest("tr").remove();
                            // $("#id").val(data.id);
                            //$("#adminName").val(data.name);
                            // $("#adminEmail").val(data.email);
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )


                        },
                    });
            }
        })


    });
</script>