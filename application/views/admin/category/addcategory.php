<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD-COURSE-CATEGORY</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Add Course Category </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">



                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group ">
                            <label class="control-label">Parent Category<font color="#FF0000">* </font> </label>
                            <div class="controls  ">
                                <select name="parent" class="selectpicker form-control" id="pontic" data-style="btn-info" data-max-options="1" data-live-search="true" required>
                                    <option value="0">None</option>
                                    <?php foreach ($category as $c) { ?>
                                        <option value="<?= $c->id; ?>"><?= $c->category; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                    </div>




                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">CATEGORY</label>

                            <div class="controls  ">
                                <input type="text" onkeyup="geturl(this.value)" class="form-control" name="child" placeholder="ENTER CATEGORY">  
                                <?php if($this->input->post("add")==1) { echo form_error("child"); } ?>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6">
                        <div class="control-group ">
                            <label class="control-label">Image<font color="#FF0000">(LOGO)</font> </label>
                            <div class="controls">
                                <input type="hidden" value="" name="old_image">
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




                    <div class="col-md-12" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">URL</label>

                            <div class="controls  ">
                                <input type="text" class="form-control" id="url" name="url" placeholder="ENTER URL">
                            </div>
                        </div>

                    </div>





                    <br>

                    <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="add" value="1">Add</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('categories'); ?>'">Back</button>

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


    <script>
        function geturl(url) {
            var newurl = url.trim().replace(/[^a-z0-9]+/gi, '-').toLowerCase();
            $('#url').val(newurl);
        }
    </script>
</body>

</html>
