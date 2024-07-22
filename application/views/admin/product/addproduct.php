<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADD-COURSE</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>


    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Add Product </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">


                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">Select Category<font color="#FF0000"></font> </label>
                            <div class="controls  ">
                                <select class="selectpicker form-control" id="enclose" data-style="btn-info" multiple data-live-search="true" name="parent[]">
                                    <?php foreach ($category as $c) { ?>
                                        <option value="<?= $c->id; ?>"><?= $c->category; ?></option>
                                    <?php } ?>
                                </select>
                                <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('parent'); } ?></font>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">HEADING </label>

                            <div class="controls  ">
                                <input type="text" onkeyup="geturl(this.value)" class="form-control" name="head" placeholder="ENTER COURSE HEADING">
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('head'); } ?></font>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">SLUG OR URL </label>

                            <div class="controls  ">
                                <input type="text" class="form-control" id="slug" name="url" placeholder="ENTER COURSE SLUG">
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('url'); } ?></font>
                            </div>
                        </div>

                    </div>













                    <!--  <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">SMALL_DESCRIPTION</label>

                            <div class="controls  ">
                                <textarea class="form-control" id="#editor" name="smdesc" rows="10" placeholder="ENTER SMALL COURSE DESCRIPTION"></textarea>

                            </div>
                        </div>
                    </div> -->


                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">ORIGNAL PRICE </label>

                            <div class="controls  ">
                                <input type="number" class="form-control" name="orig_price" id="orig" placeholder="ENTER QUANTITY">
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('orig_price'); } ?></font>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">SELLING PRICE </label>

                            <div class="controls  ">
                                <input type="number" class="form-control" id="sell" onkeyup='dis()' name="sell_price" placeholder="ENTER QUANTITY">
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('sell_price'); } ?></font>
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">QUNATITY </label>

                            <div class="controls  ">
                                <input type="number" class="form-control" name="qty" placeholder="ENTER QUANTITY">
                            </div>
                               <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('qty'); } ?></font>
                        </div>

                    </div>



                    <div class="col-md-6" style="margin: 15px 0;">
                        <div class="control-group">
                            <label class="control-label">OFF % </label>

                            <div class="controls">
                                <input type="number" class="form-control" id="off" name="off" placeholder="ENTER QUANTITY">
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('off'); } ?></font>
                            </div>
                        </div>

                    </div>





                    <div class="col-md-12" style="margin: 15px 0 30px 0; ">
                        <div class="control-group">
                            <label class="control-label">DESCRIPTION</label>

                            <div class="controls  ">
                                <textarea class="form-control" id="#edit" name="desc" rows="20" placeholder="ENTER COURSE DESCRIPTION"></textarea>
                                   <font color="#FF0000"><?php if($this->input->post("add")==1){ echo form_error('desc'); } ?></font>

                            </div>
                        </div>
                    </div>





                    <div class="col-md-6" style="margin: 15px 0 30px 0; ">
                        <div class="control-group ">
                            <label class="control-label">Status<font color="#FF0000">* </font> </label>
                            <div class="controls">
                                <select name="status" class="form-control">
                                    <option selected disabled>select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>








                    <div class="col-md-6" style="margin: 15px 0 30px 0; padding-left:40px">
                        <div class="control-group ">
                            <label class="control-label">OPTIONAL<font color="#FF0000">* </font> </label>
                            <div class="controls">
                                <!-- <select name="status" class="form-control">
                                    <option selected disabled>select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select> -->

                                <label for="pop" style="margin: 20px;">
                                    <input type="checkbox" name="popular" id="pop" value="1">POPULAR
                                </label>


                                <label for="sale" style="margin: 20px;">
                                    <input type="checkbox" name="sale" id="sale" value="1">SALE
                                </label>


                                <label for="hot" style="margin: 20px;">
                                    <input type="checkbox" name="hot" id="hot" value="1">HOT
                                </label>

                                <label for="new" style="margin: 20px;">
                                    <input type="checkbox" name="new" id="new" value="1">NEW
                                </label>

                                <label for="home" style="margin: 20px;">
                                    <input type="checkbox" name="home" id="home" value="1">SHOWHOME
                                </label>


                            </div>
                        </div>
                    </div>













                    <br>

                    <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="add" value="1">Save</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('product'); ?>'">Back</button>

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
            $('#slug').val(newurl);
        }

        function dis() {
            let selling_price = document.getElementById("sell").value
            let original_price = document.getElementById("orig").value;
            discount = ((original_price - selling_price) * 100) / original_price;
            document.getElementById("off").value = Math.ceil(discount);
        }
    </script>
</body>

</html>
