<?php
class Categories extends CI_Controller{
    function index(){
        $data['data']=$this->func->get_all("product_category");
        $this->load->view("admin/category/category",$data);
    }

    function addcategory(){
        $this->load->library("form_validation");
        $this->form_validation->set_rules("child","Category","required");
        $config['upload_path']="./media/images/category/";
        $config['allowed_types']="gif|png|jpeg|jpg|svg";
        $this->load->library("upload",$config);
        if($this->form_validation->run()){
        if($this->input->post('add')==1){
            if($this->upload->do_upload("image")){
            $insert['image']=$this->upload->data("file_name");
            $insert['parent_category']=$this->input->post("parent");
            $insert['category']=$this->input->post("child");
            $insert['url']=$this->input->post("url");
            $insert['added']=date("Y:m:d h:i:sa");
            $insert['updated']="not-yet";
            $result=$this->func->insert_data("product_category",$insert);
            if($result){
                redirect("categories");
            }
        }
        else{
        $data["error"]=$this->upload->display_errors();
        $data['category']=$this->func->get_all("product_category");
        $this->load->view("admin/category/addcategory",$data);
        }
        }}
        $data['category']=$this->func->get_all("product_category");
        $this->load->view("admin/category/addcategory",$data);
    }



function editcategory(){
$args=func_get_args();
$config['upload_path']="./media/images/category/";
$config['allowed_types']="gif|png|jpeg|jpg|svg";
$this->load->library("upload",$config);

if($this->input->post("update")==1){
    if($this->upload->do_upload("image")){
    $old_image = "./media/images/category/{$this->input->post('old_image')}";
    unlink($old_image);
    $update['image']=$this->upload->data("file_name");
    $update['parent_category']=$this->input->post("parent");
    $update['category']=$this->input->post("child");
    $update['url']=$this->input->post("url");
    $update['updated']=date("Y:m:d h:i:sa");
    $result=$this->func->insert_data("product_category",$insert);
    if($result){
        redirect("categories");
    }
}
    else{
        $update['parent_category']=$this->input->post("parent");
    $update['category']=$this->input->post("child");
    $update['url']=$this->input->post("url");
    $update['updated']=date("Y:m:d h:i:sa");
    $result=$this->func->update_data("product_category",$update,$args[0]);
    if($result){
        redirect("categories");
    }
    }   
}
else{
$data['data']=$this->func->get_where("product_category",$args[0]);
$data["category"]=$this->func->get_all("product_category");
$this->load->view("admin/category/editcategory",$data);
} 
}





function deletecategory(){
    $args=func_get_args();
    $result=$this->func->delete_data("product_category",$args[0]);
    if($result){
      redirect("categories");
    }
}


}
?>





































