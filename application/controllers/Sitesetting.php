<?php

class Sitesetting extends CI_Controller{


 function index(){
    $config['upload_path']          = './media/images/logo/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
    $this->load->library('upload', $config);
////////////for email
    if($this->input->post("email")==$this->input->post("old_email")){ 
        $email= $this->input->post("old_email");
        $email_time= $this->input->post("old_time"); }
    else{ $email= $this->input->post("email"); 
        $email_time=date("Y:m:d h:i:sa");  }
////////////for mobile
    if($this->input->post("mobile")==$this->input->post("old_mobile")){ 
        $mobile= $this->input->post("old_mobile");
        $mobile_time= $this->input->post("old_mtime"); }
    else{ $mobile= $this->input->post("mobile"); 
        $mobile_time=date("Y:m:d h:i:sa");  }
/////////for tollfree 1
    if($this->input->post("tollfree1")==$this->input->post("old_toll1")){ 
        $tollfree1= $this->input->post("old_toll1");
        $tollfree1_time= $this->input->post("old_tolltime1"); }
    else{ $tollfree1= $this->input->post("tollfree1"); 
        $tollfree1_time=date("Y:m:d h:i:sa");  }
/////////for tollfree 2
    if($this->input->post("tollfree2")==$this->input->post("old_toll2")){ 
        $tollfree2= $this->input->post("old_toll2");
        $tollfree2_time= $this->input->post("old_tolltime2"); }
    else{ $tollfree2= $this->input->post("tollfree2"); 
        $tollfree2_time=date("Y:m:d h:i:sa");  }
/////////for address
    if($this->input->post("address")==$this->input->post("old_address")){ 
        $address= $this->input->post("old_address");
        $addresslink= $this->input->post("addresslink");
        $address_time= $this->input->post("old_atime"); }
    else{ $address= $this->input->post("address"); 
         $addresslink= $this->input->post("addresslink"); 
        $address_time=date("Y:m:d h:i:sa");  }
/////////for working hours
    if($this->input->post("hours")==$this->input->post("old_hours")){ 
        $hours= $this->input->post("old_hours");
        $hours_time= $this->input->post("old_hour_update"); }
    else{ $hours= $this->input->post("hours"); 
        $hours_time=date("Y:m:d h:i:sa");  }
/////////for facebook link
    if($this->input->post("facebook")==$this->input->post("old_facebook")){ 
        $facebook= $this->input->post("old_facebook");
        $facebook_time= $this->input->post("old_ftime"); }
    else{ $facebook= $this->input->post("facebook"); 
        $facebook_time=date("Y:m:d h:i:sa");  }
/////////for twitter link
    if($this->input->post("twitter")==$this->input->post("old_twitter")){ 
        $twitter= $this->input->post("old_twitter");
        $twitter_time= $this->input->post("old_ttime"); }
    else{ $twitter= $this->input->post("twitter"); 
        $twitter_time=date("Y:m:d h:i:sa");  }
/////////for instagram link
    if($this->input->post("instagram")==$this->input->post("old_instagram")){ 
        $instagram= $this->input->post("old_instagram");
        $instagram_time= $this->input->post("old_itime"); }
    else{ $instagram= $this->input->post("instagram"); 
        $instagram_time=date("Y:m:d h:i:sa");  }
/////////for youtube link
    if($this->input->post("youtube")==$this->input->post("old_youtube")){ 
        $youtube= $this->input->post("old_youtube");
        $youtube_time= $this->input->post("old_ytime"); }
    else{ $youtube= $this->input->post("youtube"); 
        $youtube_time=date("Y:m:d h:i:sa");  }
/////////for pinterest link
    if($this->input->post("pinterest")==$this->input->post("old_pinterest")){ 
        $pinterest= $this->input->post("old_pinterest");
        $pinterest_time= $this->input->post("old_pintime"); }
    else{ $pinterest= $this->input->post("pinterest"); 
        $pinterest_time=date("Y:m:d h:i:sa");  }
/////////for playstore link
    if($this->input->post("playstore")==$this->input->post("old_playstore")){ 
        $playstore= $this->input->post("old_playstore");
        $playstore_time= $this->input->post("old_playtime"); }
    else{ $playstore= $this->input->post("playstore"); 
        $playstore_time=date("Y:m:d h:i:sa");  }
/////////for appstore link
    if($this->input->post("appstore")==$this->input->post("old_appstore")){ 
        $appstore= $this->input->post("old_appstore");
        $appstore_time= $this->input->post("old_apptime"); }
    else{ $appstore= $this->input->post("appstore"); 
        $appstore_time=date("Y:m:d h:i:sa");  }


 

   if($this->input->post("submit")==1){
      
    if($this->upload->do_upload("image")){
        $name=$this->upload->data("file_name");
        $update['logo']=$name;
        $update['logo_update']=date("Y:m:d h:i:sa");
        $update['mobile']=$mobile;
        $update['mobile_update']=$mobile_time;
        $update['tollfree1']=$tollfree1;
        $update['tollfree1_update']=$tollfree1_time;
        $update['tollfree2']=$tollfree2;
        $update['tollfree2_update']=$tollfree2_time;
        $update['email']=$email;
        $update['email_update']=$email_time;
        $update['address']=$address;
        $update['address_link']=$addresslink;
        $update['address_update']=$address_time;
        $update['timing_hours']=$hours;
        $update['timing_hour_update']=$hours_time;
        $update['facebook']=$facebook;
        $update['facebook_update']=$facebook_time;
        $update['instagram']=$instagram;
        $update['instagram_update']=$instagram_time;
        $update['twitter']=$twitter;
        $update['twitter_update']=$twitter_time;
        $update['youtube']=$youtube;
        $update['youtube_update']=$youtube_time;
        $update['pinterest']=$pinterest;
        $update['pinterest_update']=$pinterest_time;
        $update['playstore']=$playstore;
        $update['playstore_update']=$playstore_time;
        $update['appstore']=$playstore;
        $update['appstore_update']=$playstore_time;
        $result=$this->func->update_data("site_setting",$update,1);
        if($result){
            // redirect("admin/setting/site_setting")
            echo "<script>alert('logo and data updated successfully')</script>";
        }
    }
    else{
       $update['logo_update']=$this->input->post("old_imagetime");
        $update['mobile']=$mobile;
        $update['mobile_update']=$mobile_time;
        $update['tollfree1']=$tollfree1;
        $update['tollfree1_update']=$tollfree1_time;
        $update['tollfree2']=$tollfree2;
        $update['tollfree2_update']=$tollfree2_time;
        $update['email']=$email;
        $update['email_update']=$email_time;
        $update['address']=$address;
        $update['address_link']=$addresslink;
        $update['address_update']=$address_time;
        $update['timing_hours']=$hours;
        $update['timing_hour_update']=$hours_time;
        $update['facebook']=$facebook;
        $update['facebook_update']=$facebook_time;
        $update['instagram']=$instagram;
        $update['instagram_update']=$instagram_time;
        $update['twitter']=$twitter;
        $update['twitter_update']=$twitter_time;
        $update['youtube']=$youtube;
        $update['youtube_update']=$youtube_time;
        $update['pinterest']=$pinterest;
        $update['pinterest_update']=$pinterest_time;
        $update['playstore']=$playstore;
        $update['playstore_update']=$playstore_time;
        $update['appstore']=$appstore;
        $update['appstore_update']=$appstore_time;
        $result=$this->func->update_data("site_setting",$update,1);
        if($result){
            echo "<script>alert('updated successfully')</script>";
        }
    }
   }

    $data['data']=$this->func->get_all("site_setting");
     $this->load->view("admin/setting/site_setting",$data);
 }



}


?>
