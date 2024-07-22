<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONTACT</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>

    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Gallery </span>
            <!-- <a href="<?php echo base_url('admin/addgallery'); ?>"><button type="button" style="float:right;" class="btn btn-primary">Add New Gallery</button></a> -->
        </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">


                <table width="100%" id="example" cellspacing="0" cellpadding="0" border="0" class="table-bordered   table-compact table table-hover">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>MOBILE</th>
                            <th>COURSE</th>
                            <th>MESSAGE</th>
                            <th>RECEVIED TIME</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $edit) { ?>
                            <tr>
                                <td><?= $edit->id; ?></td>
                                <td><?= $edit->name; ?></td>
                                <td><?= $edit->email; ?></td>
                                <td><?= $edit->mobile; ?></td>
                                <td><?= $edit->subject; ?></td>
                                <td><?= $edit->message; ?></td>
                                <td><?= $edit->recived; ?></td>
                                <td><a href="<?= base_url("admin/deletecontact/{$edit->id}"); ?>" onclick="return confirm('YOU ARE DELETEING\nARE YOU SURE')"><i class="fa fa-trash fa-2x" style="color: red;"></i></a></td>

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
