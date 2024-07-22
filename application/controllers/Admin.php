<?php 

class Admin extends CI_Controller{

    function index(){
        $this->load->view("admin/index");
    }
    function login(){

         $this->load->helper("captcha");
         $this->load->library("form_validation");

$this->form_validation->set_rules("email","Username","required");
$this->form_validation->set_rules("password","password","required");
 $data['incorrect']="";
if($this->form_validation->run()){
    
  if(!empty($this->input->post("login"))){
      $email=$this->input->post("email");
      $password=$this->input->post("password");
    
     $getuser= $this->func->check_user("admin",$email,$password);
     if(count($getuser)==1){
         $this->session->set_userdata("user",$email);
        if ($this->input->post("remember") == 1) {
            set_cookie("email", $email, "7200000000");
            set_cookie("password", $password, "7200000000");
        }
         redirect("admin/");
     }
     else{
         $data['incorrect']=1;
     }

  } }


    $this->load->view("admin/login",$data);
}




function logout(){
    $this->load->view("admin/logout");
}




function contact(){
    $data['data']=$this->func->get_all("contact");
    $this->load->view("admin/contact/contact",$data);
}
function deletecontact(){
    $args=func_get_args();
   $result= $this->func->delete_data("contact",$args[0]);
   if($result){
       redirect("admin/contact");
   }
}



}
?>
