<!DOCTYPE html>
<html lang="en">

<head>
    <title>EDIT-PRODUCT_IMAGE</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Edit Product Image </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">

                <?php foreach($data as $edit) { ?>
                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">Select Category<font color="#FF0000"></font> </label>
                            <div class="controls  ">
                                <select class="selectpicker form-control" id="enclose" data-style="btn-info" data-max-options="1" data-live-search="true" name="parent">
                                    <?php foreach ($product as $c) { ?>
                                        <option value="<?= $c->id; ?>" <?php if($c->id==$edit->product_id){ echo "selected"; } ?>><?= $c->heading; ?></option>
                                    <?php } ?>
                                </select>
                                <font color="#FF0000"><?php if ($this->input->post("add") == 1) {
                                                            echo form_error('parent');
                                                        } ?></font>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="control-group ">
                            <label class="control-label">Image<font color="#FF0000">(LOGO)</font> </label>
                            <div class="controls">
                                <input type="hidden" value="<?=$edit->images;?>" name="old_image">
                                <input type="file" class="form-control" name="image" onchange="readURL(this)">
                                <font color="#FF0000"><?php if (!empty($error)) {
                                                            echo $error;
                                                        } ?></font>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <p class="">Selected Image<font color="#FF0000">(LOGO)</font>
                        </p>
                        <p class="float-right">last updated logo<font color="#FF0000"></font>
                        </p>
                        <img src="<?=base_url("media/images/product/{$edit->images}");?>" id="image" width="150" height="70" title="Old Image" class="">
                    </div>
                    <script>
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    $('#image').attr('src', e.target.result).width(150).height(80);
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>














                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group ">
                            <label class="control-label">Status<font color="#FF0000">* </font> </label>
                            <div class="controls">
                                <select name="status" class="form-control">
                                    <option selected disabled>select status</option>
                                    <option value="1" <?php if($edit->status==1){ echo "selected"; } ?>>Active</option>
                                    <option value="0" <?php if($edit->status==0){ echo "selected"; } ?>>Inactive</option>
                                </select>
                                <font color="#FF0000"><?php if ($this->input->post("add") == 1) {
                                                            echo form_error('status');
                                                        } ?></font>
                            </div>
                        </div>
                    </div>






  <?php } ?>














                    <br>

                    <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="update" value="1">Save</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('product/image'); ?>'">Back</button>

                    </div>

                </form>
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
