<?php 


class Deal extends CI_Controller{

    function index(){
       $data['data']=$this->func->get_all("today_deal");
       $data['product']=$this->func->get_all("product");
       $data['images']=$this->func->get_all("product_images");
        $this->load->view("admin/deal/deal",$data);
    }

 function addeal(){
    $this->load->library("form_validation");
    $this->form_validation->set_rules("parent","Product Name","required");
    $this->form_validation->set_rules("status","status","required");
    if($this->form_validation->run()){
    if($this->input->post("add")==1){
      $insert['product_id']=$this->input->post("parent");
      $insert['deal']=$this->input->post("deal");
      $insert['top_selling']=$this->input->post("sell");
      $insert['trending']=$this->input->post("trend");
      $insert['top_rated']=$this->input->post("rate");
      $insert['status']=$this->input->post("status");
      $insert['time']=date("Y:m:d H:i:sa");

      $result=$this->func->insert_data("today_deal",$insert);
      if($result){
          redirect("deal");
      }   
    }
    }else{
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/deal/adddeal",$data);}
}



//////EDIT DEAL 

function editdeal(){
    $args=func_get_args();
    $this->load->library("form_validation");
    $this->form_validation->set_rules("parent","Product Name","required");
    $this->form_validation->set_rules("status","status","required");
    if($this->form_validation->run()){
    if($this->input->post("add")==1){
      $update['product_id']=$this->input->post("parent");
      $update['deal']=$this->input->post("deal");
      $update['top_selling']=$this->input->post("sell");
      $update['trending']=$this->input->post("trend");
      $update['top_rated']=$this->input->post("rate");
      $update['status']=$this->input->post("status");
      $update['time']=date("Y:m:d H:i:sa");

      $result=$this->func->update_data("today_deal",$update,$args[0]);
      if($result){
          redirect("deal");
      }   
    }
    }else{
    $data['product']=$this->func->get_all("product");
    $data['deal']=$this->func->get_where("today_deal",$args[0]);
    $this->load->view("admin/deal/editdeal",$data);}
}


}
?>
