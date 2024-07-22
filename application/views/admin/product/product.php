<!DOCTYPE html>
<html lang="en">

<head>
    <title>PRODUCTS</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>

    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Course </span>
            <a href="<?php echo base_url('product/addproduct'); ?>"><button type="button" style="float:right;" class="btn btn-primary">Add New Product</button></a>
        </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;overflow-x: scroll;">


                <table width="100%" id="example" cellspacing="0" cellpadding="0" border="0" class="table-bordered   table-compact table table-hover">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>HEADING</th>
                            <th>DESCRIPTION</th>
                            <th>QUANTITY</th>
                            <th>ORIGNIAL_PRICE</th>
                            <th>SELLING_PRICE</th>
                            <th>OFF%</th>
                            <th>CATEGORY</th>
                            <th>URL</th>
                            <th>SALE</th>
                            <th>POPULAR</th>
                            <th>HOT</th>
                            <th>NEW</th>
                            <th>HOME</th>
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
                                <!-- <td><img src="<?= base_url("media/images/product/{$edit->image1}"); ?>" alt="slide_img" height="100" width="100"></td>
                                <td><img src="<?= base_url("media/images/product/{$edit->image2}"); ?>" alt="slide_img" height="100" width="100"></td> -->
                                <td><?= $edit->heading; ?></td>
                                <td><?= $edit->description; ?></td>
                                <td><?= $edit->quantity; ?></td>
                                
                                <td><?= $edit->orignal_price; ?></td>
                                <td><?= $edit->selling_price; ?></td>
                                <td><?= $edit->off; ?>%</td>
                                <td>  <?php  $expl=explode(",",$edit->category);
                                 foreach($expl as $exp){ foreach($category as $cat){
                                    if($cat->id==$exp){
                                        echo $cat->category." | ";
                                    }}
                                } ?></td>
                                
                                <td><?= $edit->url; ?></td>
                                <td>
                                    <img src="<?php if ($edit->sale == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td>
                                    <img src="<?php if ($edit->popular == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td>
                                    <img src="<?php if ($edit->hot == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td>
                                    <img src="<?php if ($edit->new == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td>
                                    <img src="<?php if ($edit->showhome == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td>
                                    <img src="<?php if ($edit->status == "1") {
                                                    echo base_url("media/admin/images/active.png");
                                                } else {
                                                    echo base_url("media/admin/images/inactive.png");
                                                } ?>" alt="status_img">
                                </td>
                                <td><?= $edit->added; ?></td>
                                <td><?= $edit->updated; ?></td>
                                <td><a href="<?= base_url("product/editproduct/{$edit->id}"); ?>"><i class="fa fa-pencil-square-o fa-2x" style="color: blue;"></i></a></td>
                                <td><a href="<?= base_url("product/deleteproduct/{$edit->id}"); ?>" onclick="return confirm('YOU ARE DELETEING\nARE YOU SURE')"><i class="fa fa-trash fa-2x" style="color: red;"></i></a></td>

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
