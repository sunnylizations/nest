<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN-LOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("media/css/main8c94.css"); ?>">

</head>

<body>


    <main class="main pages">


        <div class="page-content pt-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="<?= base_url('media/images/login/login-1.png'); ?>" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">

                                    <?php if(!empty($incorrect)){ echo'<div class="alert alert-danger">
                        <strong>INCORRECT!  USERID AND PASSWORD </strong> Try Again.
                          </div>'; } ?>

                                        <form method="POST" name="contact_form">
                                            <input type="hidden" value="26" name="_a2a2a_">
                                            <div class="form-group">
                                                <input type="text"  name="email" placeholder="Username or Email *" value="<?php if (!empty(get_cookie("email"))){ echo get_cookie("email"); } ?>" />
                                                   <p class="text-danger"><?php if($this->input->post("login")){ echo form_error("email"); } ?></p>
                                            </div>
                                            <div class="form-group">
                                                <input  type="password" name="password" placeholder="Your password *" value="<?php if (!empty(get_cookie("password"))){ echo get_cookie("password"); } ?>" />
                                                <p class="text-danger"><?php if($this->input->post("login")){ echo form_error("password"); } ?></p>
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <input type="text" name="" placeholder="Security code *" />
                                                </div>
                                                <span class="security-code">
                                                    <b class="text-new">8</b>
                                                    <b class="text-hot">6</b>
                                                    <b class="text-sale">7</b>
                                                    <b class="text-best">5</b>
                                                </span>
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="exampleCheckbox1" value="1" />
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <!-- <a class="text-muted" href="#">Forgot password?</a> -->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login" value="1">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script type="text/javascript">
        var formname = "contact_form";
        var fieldname = "_a2a2a_";
        var finalvalue = "4";
        var soft_sell = "document.";

        soft_sell += formname;
        soft_sell += "." + fieldname + ".va";
        eval(soft_sell + "lue='" + finalvalue + "'");
    </script>
</body>

</html>
