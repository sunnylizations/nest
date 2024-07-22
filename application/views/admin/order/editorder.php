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
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Edit Orders </span>
        </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin:55px 0;">
            <form method="POST">
   <?php foreach($editorder as $d): ?>
                <div class="col-md-12" style="margin: 15px 0;" style="margin:55px 0;">
                    <div class="control-group">
                        <label class="control-label">STATUS</label>
   <select name="status" class="form-control">
                                    <option selected disabled>select status</option>
        <option value="1" <?php if($d->status==1) { echo "selected"; } ?> >PREPARE TO DISPATCH</option>
        <option value="2" <?php if($d->status==2) { echo "selected"; } ?> >DISPATCHED</option>
        <option value="3" <?php if($d->status==3) { echo "selected"; } ?> >SHIPPED</option>
        <option value="4" <?php if($d->status==4) { echo "selected"; } ?> >DELIVERED</option>
        <option value="5" <?php if($d->status==5) { echo "selected"; } ?> >PROCESSING</option>
                                </select>
                    </div>
                </div>

                <?php endforeach;?>

                  <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                        <button type="submit" class="btn btn-success" name="add" value="1">Save</button>
                        <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('order'); ?>'">Back</button>

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
