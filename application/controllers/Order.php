<?php

class Order extends CI_Controller{

    function index(){
        $data['orders']=$this->func->get_all("order");
        $this->load->view("admin/order/showorder",$data);
    }


    function editorder(){
        $args=func_get_args();
        $data['editorder']=$this->func->get_where("order",$args[0]);
        if($this->input->post("add")==1){
            $update=array(
            "status"=>$this->input->post("status")
            );
            $result=$this->func->update_data("order",$update,$args[0]);
            if($result==TRUE){
                redirect('order','refresh');
            }
        }
        $this->load->view("admin/order/editorder",$data);
    }

    function deleteorder(){
        $args=func_get_args();
        $result=$this->func->delete_data("order",$args[0]);
        if($result==TRUE){
            redirect('order','refresh');
        }
    }

}
