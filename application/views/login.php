<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST:login</title>
    <?php $this->load->view("include/link"); ?>
</head>

<body>
    <?php $this->load->view("include/header"); ?>

    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?=base_url();?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span> </span> Login
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="<?=base_url('media/images/page/login-1.png');?>" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Login</h1>
                                            <p class="mb-30">Don't have an account? <a href="<?=base_url("register");?>">Create here</a></p>
                                            <font color="red" ><?php if(!empty($err)){ echo $err;} ?></font>
                                        </div>
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="Username or Email *"
                                                value="<?php if($this->input->post("login")==1){ echo $this->input->post("email"); } if(!empty($this->session->userdata("loginuser"))){ echo $this->session->userdata("loginuser"); } ?>"
                                                />
                                                <p><?php if($this->input->post("login")==1){ echo form_error("email"); } ?></p>
                                            </div>
                                            <div class="form-group">
                                                <input  type="password" name="pass" placeholder="Your password *" value="<?php  if(!empty($this->session->userdata("loginpass"))){ echo $this->session->userdata("loginpass"); } ?>" />
                                                <p><?php if($this->input->post("login")==1){ echo form_error("pass"); }
                                               ?></p>
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <input type="text" name="captcha" placeholder="Security code *" />
                                                   
                                                </div>
                                                <span class="security-code">
                                                    <b class="text-new">8</b>
                                                    <b class="text-hot">6</b>
                                                    <b class="text-sale">7</b>
                                                    <b class="text-best">5</b>
                                                </span>
                                            </div> <p><?php if($this->input->post("login")==1){ echo form_error("captcha"); } ?></p>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="1" />
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a class="text-muted" href="#">Forgot password?</a>
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




    <?php $this->load->view("include/footer"); ?>

</body>

</html>
