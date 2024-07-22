<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORDERS</title>
    <?php $this->load->view("include/admin_link") ?>
</head>

<body>

    <?php $this->load->view("include/admin_header"); ?>
    <?php $this->load->view("include/menu"); ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Orders </span>
        </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;overflow:scroll">


                <table width="100%" id="example" cellspacing="0" cellpadding="0" border="0" class="table-bordered   table-compact table table-hover">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>ORDER NO</th>
                            <th>STATUS</th>
                            <th>IMAGE</th>
                            <th>PRODUCT NAME</th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th>TOTAL</th>
                            <th>CUSTOMER NAME</th>
                            <th>EMAIL</th>
                            <th>MOBILE</th>
                            <th>ADDRESS</th>
                            <th>RECEVING TIME</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                            <th>VIEW BILL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1; foreach ($orders as $edit) { ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $edit->order_no; ?></td>
                                <td>
                                    <!-- <?= $edit->status; ?> -->
<?php if($edit->status==1) { echo ' <button class="btn btn-primary" >PREPARE TO DISPATCH</button>'; } ?>
<?php if($edit->status==2) { echo '<button class="btn btn-info" >DISPATCHED</button>'; } ?>
<?php if($edit->status==3) { echo '<button class="btn btn-warning" >SHIPPED</button>'; } ?>
<?php if($edit->status==4) { echo '<button class="btn btn-success" >DELIVERED</button>'; } ?>
<?php if($edit->status==5) { echo '<button class="btn btn-secondary" >PROCESSING</button>'; } ?>
                            
                            
                            </td>
                                <td><img src="<?=$edit->image; ?>" alt="slide_img" height="100" width="100"></td>
                                <td><?= $edit->product_name; ?></td>
                                <td><?= $edit->quantity; ?></td>
                                <td><?= $edit->price; ?></td>
                                <td><?= $edit->total; ?></td>
                                
                                <td><?= $edit->customer_name; ?></td>
                                <td><?= $edit->email; ?></td>
                                <td><?= $edit->mobile; ?></td>
                                <td><?= $edit->address; ?></td>
                                <td><?= $edit->recived_time; ?></td>
                                <td><a href="<?= base_url("order/editorder/{$edit->id}"); ?>"><i class="fa fa-pencil-square-o fa-2x" style="color: blue;"></i></a></td>
                                <td><a href="<?= base_url("order/deleteorder/{$edit->id}"); ?>" onclick="return confirm('YOU ARE DELETEING\nARE YOU SURE')"><i class="fa fa-trash fa-2x" style="color: red;"></i></a></td>
                                <td><a href="<?= base_url("invoice/{$edit->order_no}"); ?>" onclick="return confirm('DO YOU WANT TO SHOW BILL')" style="color: blue;">View bill</a></td>

                            </tr>
                        <?php $i++; } ?>
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
