<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEST: CONTACT</title>
    <?php $this->load->view("include/link"); ?>
</head>





<body>
    <?php $this->load->view("include/header"); ?>



    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?= base_url(); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> Contact
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="row align-items-end mb-50">
                            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-5">
                                <h4 class="mb-20 text-brand">How can help you ?</h4>
                                <h1 class="mb-30">Let us know how we can help you</h1>
                                <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <h5 class="mb-20">01. Visit Feedback</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <h5 class="mb-20">02. Employer Services</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    </div>
                                    <div class="col-lg-6 mb-lg-0 mb-4">
                                        <h5 class="mb-20 text-brand">03. Billing Inquiries</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mb-20">04.General Inquiries</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <section class="container mb-50 d-none d-md-block">
                <div class="border-radius-15 overflow-hidden">
                    <div id="" class="leaflet-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.356354690253!2d77.04404591489534!3d28.708894482387805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d067abf232871%3A0x51cb5b6e092c135!2sRaam%20Janaki%20Dhaam%20Shiv%20Mandir%20(Kuan%20Wala)!5e0!3m2!1sen!2sin!4v1650293926450!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <div class="row mb-60">
                                <div class="col-md-4 mb-4 mb-md-0">

                                    <h4 class="mb-15 text-brand">Office</h4>
                                    205 North Michigan Avenue, Suite 810<br />
                                    Chicago, 60601, USA<br />
                                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                                    <abbr title="Email">Email: </abbr><a href="" class="__cf_email__" data-cfemail="13707c7d677270675356657261723d707c7e">[email&#160;protected]</a><br />
                                    <a class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <h4 class="mb-15 text-brand">Studio</h4>
                                    205 North Michigan Avenue, Suite 810<br />
                                    Chicago, 60601, USA<br />
                                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br />
                                    <abbr title="Email">Email: </abbr><a href="" class="__cf_email__" data-cfemail="dfbcb0b1abbebcab9f9aa9beadbef1bcb0b2">[email&#160;protected]</a><br />
                                    <a class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up"><i class="fi-rs-marker mr-5"></i>View map</a>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="mb-15 text-brand">Shop</h4>
                                    <?php foreach ($site as $s) :
                                        echo $s->address; ?>


                                        <abbr title="Phone">Phone:</abbr> <?= $s->mobile; ?><br />
                                        <abbr title="Email">Email: </abbr><a href="" class="__cf_email__" data-cfemail="a4c7cbcad0c5c7d0e4e1d2c5d6c58ac7cbc9"><?= $s->email; ?></a><br />
                                        <a class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up" href="<?= $s->address_link; ?>"><i class="fi-rs-marker mr-5"></i>View map</a>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="contact-from-area padding-20-row-col">
                                        <h5 class="text-brand mb-10">Contact form</h5>
                                        <h2 class="mb-10">Drop Us a Line</h2>
                                        <p class="text-muted mb-30 font-sm">Your email address will not be published. Required fields are marked *</p>
                                        <form class="contact-form-style mt-30" id="contact_form" name="contact_form" method="POST">
                                            <input type="hidden" value="26" name="captcha">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="name" placeholder="First Name" type="text" value='<?php if($this->input->post("submit")==1) { echo $this->input->post('name'); } ?>' />
                                                        <p class="text-brand"><?php if($this->input->post("submit")==1) { echo form_error("name"); } ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="email" placeholder="Your Email" type="email" value='<?php if($this->input->post("submit")==1) { echo $this->input->post('email'); } ?>' />
                                                           <p class="text-brand"><?php if($this->input->post("submit")==1) { echo form_error("email"); } ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="mobile" placeholder="Your Phone" type="tel"  value='<?php if($this->input->post("submit")==1) { echo $this->input->post("mobile"); } ?>'/>
                                                           <p class="text-brand"><?php if($this->input->post("submit")==1) { echo form_error("mobile"); } ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <input name="subject" placeholder="Subject" type="text" value='<?php if($this->input->post("submit")==1) { echo $this->input->post("subject"); } ?>' />
                                                           <p class="text-brand"><?php if($this->input->post("submit")==1) { echo form_error("subject"); } ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="textarea-style mb-30">
                                                        <textarea name="message" placeholder="Message"><?php if($this->input->post("submit")==1) { echo $this->input->post("message"); } ?></textarea>
                                                           <p class="text-brand"><?php if($this->input->post("submit")==1) { echo form_error("message"); } ?></p>
                                                    </div>
                                                    <button class="submit submit-auto-width" type="submit" name="submit" value="1">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 pl-50 d-lg-block d-none">
                                    <img class="border-radius-15 mt-50" src="<?= base_url('media/images/page/contact-2.png'); ?>" alt="" />
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>




    <?php $this->load->view("include/footer"); ?>

    <script type="text/javascript">

        var formname = "contact_form";
        var fieldname = "captcha";
        var finalvalue = "4";
        var soft_sell = "document.";

        soft_sell += formname;
        soft_sell += "." + fieldname + ".va";
        eval(soft_sell + "lue='" + finalvalue + "'");
    </script>
</body>

</html>
