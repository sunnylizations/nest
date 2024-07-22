<?php 


class Product extends CI_Controller{

function index(){
    $data['data']=$this->func->get_all("product");
    $data['category']=$this->func->get_all("product_category");
    $this->load->view("admin/product/product",$data);
}

function addproduct(){
    $this->load->library("form_validation");
    $this->form_validation->set_rules("parent[]","category","required");
    $this->form_validation->set_rules("head","heading","required");
    $this->form_validation->set_rules("desc","description","required");
    $this->form_validation->set_rules("qty","quantity","required");
    $this->form_validation->set_rules("orig_price","orignal price","required");
    $this->form_validation->set_rules("sell_price","selling price","required");
    $this->form_validation->set_rules("url","url","required");
    if($this->form_validation->run()){
    if($this->input->post("add")==1){
        $categ=implode(",",$this->input->post("parent"));
      $insert['heading']=$this->input->post("head");
      $insert['description']=$this->input->post("desc");
      $insert['quantity']=$this->input->post("qty");
      $insert['orignal_price']=$this->input->post("orig_price");
      $insert['selling_price']=$this->input->post("sell_price");
      $insert['category']=$categ;
      $insert['url']=$this->input->post("url");
      $insert['sale']=$this->input->post('sale');
      $insert['popular']=$this->input->post('popular');
      $insert['hot']=$this->input->post('hot');
      $insert['new']=$this->input->post('new');
      $insert['off']=$this->input->post('off');
      $insert['showhome']=$this->input->post('home');
      $insert['status']=$this->input->post('status');
      $insert['added']=date("Y:m:d h:i:sa");
      $insert['updated']="not-yet";
      $result=$this->func->insert_data("product",$insert);

      if($result){
          redirect("product");
      }
    }  }
    else{
    $data['category']=$this->func->get_all("product_category");
    $this->load->view("admin/product/addproduct",$data);
    }
}


function editproduct(){
    $args=func_get_args();
    if($this->input->post("update")==1){
        $categ=implode(",",$this->input->post("parent"));
      $update['heading']=$this->input->post("head");
      $update['description']=$this->input->post("desc");
      $update['quantity']=$this->input->post("qty");
      $update['orignal_price']=$this->input->post("orig_price");
      $update['selling_price']=$this->input->post("sell_price");
      $update['category']=$categ;
      $update['url']=$this->input->post("url");
      $update['sale']=$this->input->post('sale');
      $update['popular']=$this->input->post('popular');
      $update['hot']=$this->input->post('hot');
      $update['new']=$this->input->post('new');
      $update['off']=$this->input->post('off');
      $update['showhome']=$this->input->post('home');
      $update['status']=$this->input->post('status');
      $update['updated']=date("Y:m:d h:i:sa");
      $result=$this->func->update_data("product",$update,$args[0]);

      if($result){
          redirect("product");
      }
    }
    else{
        $data['category']=$this->func->get_all("product_category");
        $data['edit']=$this->func->get_where("product",$args[0]);
        $this->load->view("admin/product/editproduct",$data);
    }
}


function deleteproduct(){
    $args=func_get_args();
    $result=$this->func->delete_data("product",$args[0]);
    if($result){
        redirect("product");
    }
}



function image(){
    $data['data']=$this->func->get_all("product_images");
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/product/image",$data);
}


function addimage(){
    $config['upload_path']="./media/images/product/";
    $config['allowed_types']="gif|jpg|jpeg|png|svg";
    $this->load->library("upload",$config);
    $this->load->library("form_validation");

    $this->form_validation->set_rules("parent","Product Name","required");
    $this->form_validation->set_rules("status","status","required");
    if($this->form_validation->run()){
    if($this->input->post("add")==1){
     if($this->upload->do_upload("image")){
      $insert['product_id']=$this->input->post("parent");
      $insert['images']=$this->upload->data("file_name");
      $insert['status']=$this->input->post("status");
      $insert['added']=date("Y:m:d h:i:sa");
      $insert['updated']="not-yet";

      $result=$this->func->insert_data("product_images",$insert);
      if($result){
          redirect("product/image");
      }
     }
     else{
    $data['error']=$this->upload->display_errors();
    $data['data']=$this->func->get_all("product_images");
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/product/addimage",$data);
     }    
    }
    }else{
    $data['data']=$this->func->get_all("product_images");
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/product/addimage",$data);}
}


function editimage(){
    $args=func_get_args();
    $config['upload_path']="./media/images/product/";
    $config['allowed_types']="gif|jpg|jpeg|png|svg";
    $this->load->library("upload",$config);
    $this->load->library("form_validation");

    $this->form_validation->set_rules("parent","Product Name","required");
    $this->form_validation->set_rules("status","status","required");
    if($this->form_validation->run()){
    if($this->input->post("update")==1){
     if($this->upload->do_upload("image")){
         $old_image="./media/images/product/".$this->input->post("old_image");
         unlink($old_image);
         echo $old_image;
      $update['product_id']=$this->input->post("parent");
      $update['images']=$this->upload->data("file_name");
      $update['status']=$this->input->post("status");
      $update['updated']=date("Y:m:d h:i:sa");

      $result=$this->func->update_data("product_images",$update,$args[0]);
      if($result){
          redirect("product/image");
      }
     }
     else{
    $data['error']=$this->upload->display_errors();
  $data['data']=$this->func->get_where("product_images",$args[0]);
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/product/editimage",$data);}
    }
    }else{
    $data['data']=$this->func->get_where("product_images",$args[0]);
    $data['product']=$this->func->get_all("product");
    $this->load->view("admin/product/editimage",$data);}
}





}
?>
