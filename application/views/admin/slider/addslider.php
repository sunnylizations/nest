<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD-SLIDER</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Add Slider </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">


                    <h3 class="text-primary">IMAGE</h3>
                    <div class="col-md-6">
                        <div class="control-group ">
                            <label class="control-label">Image<font color="#FF0000">(LOGO)</font> </label>
                            <div class="controls">
                                <input type="hidden" value="4" name="mediaid">
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
                        <img src="" id="image" width="150" height="70" title="Old Image" class="">
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





                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">HEADING</label>

                            <div class="controls  ">
                                <input type="text" name="head" placeholder="ENTER SLIDER HEADING" class="form-control"
                                 value="<?php if($this->input->post('head')){ echo $this->input->post('head'); } ?>">
                            </div>
                            <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error("head"); } ?></font>
                        </div>
                    </div>





                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">URL</label>
                            <div class="controls  ">
                                <input type="text" name="url" placeholder="ENTER BUTTON LINK" class="form-control"   value="<?php if($this->input->post('head')){ echo $this->input->post('url'); } ?>">
    <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error("url"); } ?></font>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">DESCRIPTION</label>

                            <div class="controls  ">
                                <input type="text" class="form-control" name="desc" placeholder="ENTER SLIDER DESCRIPTION"  value="<?php if($this->input->post('head')){ echo $this->input->post('desc'); } ?>">
                                    <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error("desc"); } ?></font>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin: 15px 0 30px 0; ">
                        <div class="control-group" style="opacity: 0;">
                            <label class="control-label">DESCRIPTION</label>

                            <div class="controls  ">
                                <input type="text" class="form-control" name="twitter" placeholder="ENTER SLIDER DESCRIPTION" readonly>

                            </div>
                        </div>
                    </div>







                    <br>

                    <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="add" value="1">Add</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('slider/'); ?>'">Back</button>

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
