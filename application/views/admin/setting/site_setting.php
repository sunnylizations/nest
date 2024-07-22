<!DOCTYPE html>
<html lang="en">

<head>
    <title>SITE-SETTINGS</title>
    <?php $this->load->view("include/admin_link"); ?>
</head>

<body>
    <?php
    $this->load->view("include/admin_header");
    $this->load->view("include/menu");
    ?>

    <div class="banner">
        <h2> <a href="<?= base_url("admin"); ?>">Home</a> <i class="fa fa-angle-right"></i> <span> Site Setting </span> </h2>
        <div class="row-fluid clear">
            <div class="span12 content" style="margin-top:15px;">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">


                    <h3 class="text-primary">LOGO</h3>
                    <?php foreach ($data as $g) { ?>
                        <div class="col-md-6">
                            <div class="control-group ">
                                <label class="control-label">New Image<font color="#FF0000">(LOGO)</font> </label>
                                <div class="controls">
                                    <input type="hidden" value="4" name="mediaid">
                                    <input type="file" class="form-control" name="image">
                                    <input type="hidden" class="form-control" name="old_image" value="<?= $g->logo; ?>">
                                    <input type="hidden" name="old_imagetime" value="<?= $g->logo_update; ?>">
                                    <font color="#FF0000"><?php if (!empty($error)){ echo $error; } ?></font>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <p class="">Old Image<font color="#FF0000">(LOGO)</font>
                            </p>
                            <p class="float-right">last updated logo<font color="#FF0000">(<?= $g->logo_update; ?>)</font>
                            </p>
                            <img src="<?= base_url("media/images/logo/{$g->logo}"); ?>" width="150" height="70" title="Old Image" class="">
                        </div>


                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">EMAIL </label>
                                <p class="float-right">Last updated email- <font color="#FF0000">(<?= $g->email_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" class="form-control" id="title" name="email" value="<?= $g->email; ?>" placeholder="ENTER EMAIL">
                                    <input type="hidden" name="old_email" value="<?= $g->email; ?>">
                                    <input type="hidden" name="old_time" value="<?= $g->email_update; ?>">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">MOBILE</label>
                                <p class="float-right">Last updated mobile- <font color="#FF0000">(<?= $g->mobile_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                <input type="text" name="mobile" placeholder="ENTER MOBILE" value="<?=$g->mobile; ?>" class="form-control">
                                    <input type="hidden" name="old_mobile" value="<?= $g->mobile; ?>">
                                    <input type="hidden" name="old_mtime" value="<?= $g->mobile_update; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">TOLLFREE 1 </label>
                                <p class="float-right">Last updated tollfree 1- <font color="#FF0000">(<?= $g->tollfree1_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="tollfree1" value="<?= $g->tollfree1; ?>" placeholder="ENTER TOLLFREE 1" class="form-control">
                                    <input type="hidden" name="old_toll1" value="<?= $g->tollfree1; ?>">
                                    <input type="hidden" name="old_tolltime1" value="<?= $g->tollfree1_update; ?>">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">TOLLFREE 2 </label>
                                <p class="float-right">Last updated tollfree 2- <font color="#FF0000">(<?= $g->tollfree2_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="tollfree2" value="<?= $g->tollfree2; ?>" placeholder="ENTER TOLLFREE 2  " class="form-control">
                                    <input type="hidden" name="old_toll2" value="<?= $g->tollfree2; ?>">
                                    <input type="hidden" name="old_tolltime2" value="<?= $g->tollfree2_update; ?>">
                                </div>
                            </div>
                        </div>






                        <div class="col-md-6" style="margin-bottom: 30px;">
                            <div class="control-group">
                                <label class="control-label">ADDRESS</label>
                                <p class="float-right">Last updated address- <font color="#FF0000">(<?= $g->address_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" class="form-control" value="<?= $g->address; ?>" name="address" placeholder="ENTER ADDRESS">
                                    <input type="hidden" name="old_address" value="<?= $g->address; ?>">
                                </div>
                            </div>

                        </div>







                        <div class="col-md-6" style="margin-bottom: 30px;">
                            <div class="control-group">
                                <label class="control-label">GOOGLE MAP ADDRESS LINK</label>
                                <p class="float-right">Last updated <font color="#FF0000">(<?= $g->address_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="addresslink" value="<?= $g->address_link; ?>" placeholder="ENTER GOOGLE MAP ADDRESS LINK" class="form-control">
                                    <input type="hidden" name="old_atime" value="<?= $g->address_update; ?>">
                                </div>
                            </div>
                        </div>







                        <div class="col-md-6" style="margin-bottom: 30px;">
                            <div class="control-group">
                                <label class="control-label">WORKING HOURS</label>
                                <p class="float-right">Last updated timing- <font color="#FF0000">(<?= $g->timing_hour_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" class="form-control" value="<?= $g->timing_hours; ?>" name="hours" placeholder="ENTER ADDRESS">
                                    <input type="hidden" name="old_hours" value="<?= $g->timing_hours; ?>">
                                    <input type="hidden" name="old_hour_update" value="<?= $g->timing_hour_update; ?>">
                                </div>
                            </div>

                        </div>






                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">FACEBOOK LINK</label>
                                <p class="float-right">Last updated facebook- <font color="#FF0000">(<?= $g->facebook_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" class="form-control" name="facebook" value="<?= $g->facebook; ?>" placeholder="ENTER FACEBOOK PROFILE LINK">
                                    <input type="hidden" name="old_facebook" value="<?= $g->facebook; ?>">
                                    <input type="hidden" name="old_ftime" value="<?= $g->facebook_update; ?>">
                                </div>
                            </div>

                        </div>




                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">TWITTER LINK</label>
                                <p class="float-right">Last updated twitter- <font color="#FF0000">(<?= $g->twitter_update; ?>)</font>
                                <div class="controls  ">
                                    <input type="text" class="form-control" name="twitter" value="<?= $g->twitter; ?>" placeholder="ENTER TWITTER PROFILE LINK">
                                    <input type="hidden" name="old_twitter" value="<?= $g->twitter; ?>">
                                    <input type="hidden" name="old_ttime" value="<?= $g->twitter_update; ?>">
                                </div>
                            </div>

                        </div>



                        
                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">INSTAGRAM LINK</label>
                                <p class="float-right">Last updated instagarm- <font color="#FF0000">(<?= $g->instagram_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="instagram" value="<?= $g->instagram; ?>" placeholder="ENTER INSTAGRAM PROFILE LINK" class="form-control">
                                    <input type="hidden" name="old_instagram" value="<?= $g->instagram; ?>">
                                    <input type="hidden" name="old_itime" value="<?= $g->instagram_update; ?>">
                                </div>
                            </div>
                        </div>




                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">YOUTUBE LINK</label>
                                <p class="float-right">Last updated youtube- <font color="#FF0000">(<?= $g->youtube_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="youtube" value="<?= $g->youtube; ?>" placeholder="ENTER YOUTUBE PROFILE LINK" class="form-control">
                                    <input type="hidden" name="old_youtube" value="<?= $g->youtube; ?>">
                                    <input type="hidden" name="old_ytime" value="<?= $g->youtube_update; ?>">
                                </div>
                            </div>
                        </div>





                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">PINTEREST LINK</label>
                                <p class="float-right">Last updated pinterest- <font color="#FF0000">(<?= $g->pinterest_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="pinterest" value="<?= $g->pinterest; ?>" placeholder="ENTER PINTEREST PROFILE LINK" class="form-control">
                                    <input type="hidden" name="old_pinterest" value="<?= $g->pinterest; ?>">
                                    <input type="hidden" name="old_pintime" value="<?= $g->pinterest_update; ?>">
                                </div>
                            </div>
                        </div>







                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">PLAYSTORE LINK</label>
                                <p class="float-right">Last updated playstore- <font color="#FF0000">(<?= $g->playstore_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="playstore" value="<?= $g->playstore; ?>" placeholder="ENTER PLAY STORE LINK" class="form-control">
                                    <input type="hidden" name="old_playstore" value="<?= $g->playstore; ?>">
                                    <input type="hidden" name="old_playtime" value="<?= $g->playstore_update; ?>">
                                </div>
                            </div>
                        </div>







                        <div class="col-md-6" style="margin: 15px 0;">
                            <div class="control-group">
                                <label class="control-label">APPSTORE LINK</label>
                                <p class="float-right">Last updated appstore- <font color="#FF0000">(<?= $g->appstore_update; ?>)</font>
                                </p>
                                <div class="controls  ">
                                    <input type="text" name="appstore" value="<?= $g->appstore; ?>" placeholder="ENTER APPSTORE LINK" class="form-control">
                                    <input type="hidden" name="old_appstore" value="<?= $g->appstore; ?>">
                                    <input type="hidden" name="old_apptime" value="<?= $g->appstore_update; ?>">
                                </div>
                            </div>
                        </div>







                        <br>

                        <div class="form-actions ajax-spinner" style="padding-top: 30px;">
                            <button type="submit" class="btn btn-success" name="submit" value="1">Save</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='<?= base_url('admin/'); ?>'">Back</button>

                        </div>
                    <?php } ?>
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
