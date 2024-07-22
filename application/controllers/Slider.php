<?php 

class Slider extends CI_Controller{

function index(){
    $data["data"]=$this->func->get_all("slider");
    $this->load->view("admin/slider/slider",$data);
}

function addslider(){
    $this->load->library("form_validation");
    $config['upload_path']          = './media/images/slider/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
    $this->load->library("upload",$config);
    $this->form_validation->set_rules("head","Heading","required");
    $this->form_validation->set_rules("url","URL","required");
    $this->form_validation->set_rules("desc","Description","required");

       if($this->input->post("add")==1){
    if($this->form_validation->run()){
 
        if($this->upload->do_upload("image")){
            $insert['image']=$this->upload->data("file_name");
            $insert['heading']=$this->input->post("head");
            $insert['description']=$this->input->post("desc");
            $insert['url']=$this->input->post("url");
            $insert['added']=date("Y:m:d h:i:sa");
            $insert['updated']="not-yet";
            // print_r($insert);
            $result=$this->func->insert_data("slider",$insert);
            if($result){   redirect("slider");  }
        }
        else{
            $data['error']=$this->upload->display_errors();
            $this->load->view("admin/slider/addslider",$data);
        }
    }
    else{  $this->load->view("admin/slider/addslider");  }
}
    else{
    $this->load->view("admin/slider/addslider");
    }
}


function editslider(){
    $args=func_get_args();
    $config['upload_path']="./media/images/slider/";
    $config['allowed_types']="gif|png|jpg|jpeg|svg";
    $this->load->library("upload",$config);
   if($this->input->post("update")==1){
      

            if ($this->upload->do_upload("image")) {
                $old_image = "./media/images/slider/{$this->input->post('old_image')}";
                unlink($old_image);
                $update['image'] = $this->upload->data("file_name");
                $update['heading'] = $this->input->post("head");
                $update['description'] = $this->input->post("desc");
                $update['url'] = $this->input->post("url");
                $update['updated'] = date("Y:m:d h:i:sa");
                // print_r($insert);
                $result = $this->func->update_data("slider",$update,$args[0]);
                if ($result) {
                    redirect("slider");
                }
            }
            else{
                $update['heading'] = $this->input->post("head");
                $update['description'] = $this->input->post("desc");
                $update['url'] = $this->input->post("url");
                $update['updated'] = date("Y:m:d h:i:sa");
                // print_r($insert);
                $result = $this->func->update_data("slider", $update, $args[0]);
                if ($result) {
                    redirect("slider");
                }
            }
   }

$data["edit"]=$this->func->get_where("slider",$args[0]);
$this->load->view("admin/slider/editslider",$data);
}

function deleteslider(){
    $args=func_get_args();
    $result=$this->func->delete_data("slider",$args[0]);
    if($result){
      redirect("slider");
    }
}

}
?>
