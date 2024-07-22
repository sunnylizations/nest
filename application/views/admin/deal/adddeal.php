<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD-DEAL</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Add DEAL </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">


                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">Select Product<font color="#FF0000"></font> </label>
                            <div class="controls  ">
                                <select class="selectpicker form-control" id="enclose" data-style="btn-info" data-max-options="1" data-live-search="true" name="parent">
                                    <?php foreach ($product as $c) { ?>
                                        <option value="<?= $c->id; ?>"><?= $c->heading; ?></option>
                                    <?php } ?>
                                </select>
                                <font color="#FF0000"><?php if ($this->input->post("add") == 1) {
                                                            echo form_error('parent');
                                                        } ?></font>
                            </div>
                        </div>
                    </div>







                    <div class="col-md-12" style="margin: 15px 0 30px 0; padding-left:40px">
                        <div class="control-group ">
                            <label class="control-label">SHOW<font color="#FF0000">* </font> </label>
                            <div class="controls">
                             

                                <label for="deal" style="margin: 20px;">
                                    <input type="checkbox" id="deal" name="deal" value="1">DEAL OF THE DAY
                                </label>

                                <label for="pop" style="margin: 20px;">
                                    <input type="checkbox" id="pop" name="sell" value="1">TOP SELLING
                                </label>


                                <label for="sale" style="margin: 20px;">
                                    <input type="checkbox" id="sale" name="trend" value="1"  >TRENDING
                                </label>


                                <label for="hot" style="margin: 20px;">
                                    <input type="checkbox" id="hot" name="rate" value="1"  >TOP RATED
                                </label>

                              


                            </div>
                        </div>
                    </div>






                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group ">
                            <label class="control-label">Status<font color="#FF0000">* </font> </label>
                            <div class="controls">
                                <select name="status" class="form-control">
                                    <option selected disabled>select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <font color="#FF0000"><?php if ($this->input->post("add") == 1) {
                                                            echo form_error('status');
                                                        } ?></font>
                            </div>
                        </div>
                    </div>





















                    <br>

                    <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="add" value="1">Save</button>
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
