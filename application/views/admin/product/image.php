<!DOCTYPE html>
<html lang="en">

<head>
    <title>PRODUCTS-IMAGE</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>

    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Products image </span>
            <a href="<?php echo base_url('product/addimage'); ?>"><button type="button" style="float:right;" class="btn btn-primary">Add New Image</button></a>
        </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px; ">


                <table width="100%" id="example" cellspacing="0" cellpadding="0" border="0" class="table-bordered   table-compact table table-hover">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>PRODUCT NAME</th>
                            <th>IMAGE</th>
                            <th>STATUS</th>
                            <th>ADDED DATE</th>
                            <th>UPDATED DATE</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $edit) { ?>
                            <tr>
                                <td><?= $edit->id; ?></td>

                                <td> <?php  
                                            foreach ($product as $exp) {
                                                if ($exp->id == $edit->product_id) {
                                                    echo $exp->heading . "<br>";
                                                    break;
                                                }
                                        } ?></td>

                                

                                <td><img src="<?= base_url("media/images/product/{$edit->images}"); ?>" alt="slide_img" height="100" width="100"></td>

                                <td>
                                <img src="<?php if ($edit->status == "1") {
                                                echo base_url("media/admin/images/active.png");
                                            } else {
                                                echo base_url("media/admin/images/inactive.png");
                                            } ?>" alt="status_img">
                                </td>
                                <td><?= $edit->added; ?></td>
                                <td><?= $edit->updated; ?></td>
                                <td><a href="<?= base_url("product/editimage/{$edit->id}"); ?>"><i class="fa fa-pencil-square-o fa-2x" style="color: blue;"></i></a></td>
                                <td><a href="<?= base_url("product/deleteimage/{$edit->id}"); ?>" onclick="return confirm('YOU ARE DELETEING\nARE YOU SURE')"><i class="fa fa-trash fa-2x" style="color: red;"></i></a></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




            </div>
        </div>
    </div>


    <div class="content-top">

        <div class="col-md-4 "> </div>

        <div class="clearfix"> </div>

    </div>



    <?php $this->load->view("include/admin_footer"); ?>
</body>

</html>
