<?php
$this->session->unset_userdata("user");
$this->session->sess_destroy();
redirect("admin/login");
?>
