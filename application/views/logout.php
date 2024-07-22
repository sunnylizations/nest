<?php
$this->session->unset_userdata("nestuser");
// $this->session->sess_destroy();
redirect('login','refresh')
?>
