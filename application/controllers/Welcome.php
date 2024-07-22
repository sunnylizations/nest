<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 /////////////home page
	public function index()
	{   
		$data['items']=$this->cart->contents();
		$data['wishlist']=$this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
		$data['site']=$this->func->get_all("site_setting");
		$data['slider']=$this->func->get_all("slider");
		$data['category']=$this->func->get_all("product_category");
		$data['product_image']=$this->func->get_all("product_images");
		$data['allpopular']=$this->func->where_multi("product",array("popular"=>1));
		$data['cakemilk']=$this->func->where_multi("product",array("category"=>1));
		$data['coffetea']=$this->func->where_multi("product",array("category"=>10));
		$data['snack']=$this->func->where_multi("product",array("category"=>5));
		$data['custardapple']=$this->func->where_multi("product",array("category"=>9));
		$data['vegetable']=$this->func->where_multi("product",array("category"=>6));
		$data['headphone']=$this->func->where_multi("product",array("category"=>11));
		$data['newitem']=$this->func->where_multi_desc("product",array("popular"=>1));
		$data['newitem2']=$this->func->get_all_id_desc("product");
		$data['topselling']=$this->func->where_multi("today_deal",array("top_selling"=>1));
		$data['trending']=$this->func->where_multi("today_deal",array("trending"=>1));
		$data['top_rated']=$this->func->where_multi("today_deal",array("top_rated"=>1));
		$data['product']=$this->func->get_all("product");
		$data['deals']=$this->func->get_all("today_deal");
		$this->load->view('home',$data);
	}

/////////about page
	function about(){
		$data['items'] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
		$data['site']=$this->func->get_all("site_setting");
		$this->load->view("about",$data);
	}




	////////////////contact page 
	function contact(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("mobile","Mobile","required");
		$this->form_validation->set_rules("subject","Subject","required");
		$this->form_validation->set_rules("message","Message","required");
		if($this->form_validation->run()){
		
		if(($this->input->post("submit")==1) && ($this->input->post('captcha')==4)){
          $insert['name']=$this->input->post("name");
          $insert['email']=$this->input->post("email");
          $insert['mobile']=$this->input->post("mobile");
          $insert['subject']=$this->input->post("subject");
          $insert['message']=$this->input->post("message");
		  $insert['recived']=date("Y:m:d h:i:sa");

	    $result=$this->func->insert_data('contact',$insert);
		if($result){
			echo "<script>alert('WE WILL CONTACT YOU SOON \\nTHANKYOU'); window.location.href='".base_url()."';</script>";
			// print_r($insert);
		}
		}else{
			$data['items']=$this->cart->contents();
			$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
			$data['site']=$this->func->get_all("site_setting");
			$this->load->view("contact",$data);
		}}
		
		else{
			$data['items']=$this->cart->contents();
			$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
			$data['site']=$this->func->get_all("site_setting");
			$this->load->view("contact",$data);
		}
	}
 

//////////all product page

function allproduct(){
			$this->load->library("pagination");
		$config["base_url"] = base_url() . "allproducts/";
		$config['total_rows']= $this->db->count_all("product");
		$config['per_page'] = 10;
		$config["uri_segment"] = 2;

		// styling links
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_link'] = '<i class="fi-rs-arrow-small-left"></i>';
		$config['prev_tag_close'] = '</li>';
	
		$config['next_tag_open'] = '<li class="page-item" >';
        $config['next_link'] = '<i class="fi-rs-arrow-small-right"></i>';
		$config['next_tag_close'] = '</li>';
		$config['first_link'] = '<<';	
		$config['last_link'] = '>>';
	
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');
		$config['full_tag_close'] = '</ul>';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data["allproduct"] = $this->func->pagination("product", $config['per_page'], $page);
 
		$data['links'] = $this->pagination->create_links();
	$data['items'] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['deal']=$this->func->get_all("today_deal");
	$this->load->view("allproduct",$data);
}

//////////all Category page

function category(){
	$args=func_get_args();
	$category=$this->func->get_all("product_category");
		$this->load->library("pagination");
			$config["base_url"] = base_url("category/{$args[0]}/");
	foreach($category as $c){
		if($args[0]==$c->url){
			$args[0]=$c->id;
		}
	}
		// print_r($this->uri->segment(3));
		// echo count($this->db->query("SELECT * FROM product WHERE category REGEXP '[[:<:]]{$args[0]}[[:>:]]' LIMIT 0,99")->result());
			
			$config['total_rows']= count($this->db->query("SELECT * FROM product WHERE category REGEXP '[[:<:]]{$args[0]}[[:>:]]' LIMIT 0,99")->result());
			$config['per_page'] = 10;
			$config["uri_segment"] = 3;

			// styling links
			$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
			$config['prev_tag_open'] = ' <li class="page-item">';
			$config['prev_link'] = '<i class="fi-rs-arrow-small-left"></i>';
			$config['prev_tag_close'] = '</li>';

			$config['next_tag_open'] = '<li class="page-item" >';
		    $config['next_link'] = '<i class="fi-rs-arrow-small-right"></i>';
			$config['next_tag_close'] = '</li>';
			$config['first_link'] = '<<';	
			$config['last_link'] = '>>';

			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['attributes'] = array('class' => 'page-link');
			$config['full_tag_close'] = '</ul>';
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$page=preg_match("/[0-9]/i",$page)?$page.",":"";
		// 	$data["allproduct"] = $this->func->pagination_where("product",array(""),$config['per_page'], $page);
		// $data['allproduct'] = $this->func->pagination_where("product", array('category' => $args[0]),$config['per_page'],$page);
		$data['allproduct'] = $this->db->query("SELECT * FROM product WHERE category REGEXP '[[:<:]]{$args[0]}[[:>:]]' LIMIT {$page}{$config['per_page']}")->result();
		////// WHERE category= REGEXP '[[:<:]]{$args[0]}[[:>:]]'");

 
	$data['links'] = $this->pagination->create_links();


	$data['items'] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['deal']=$this->func->get_all("today_deal");
	$this->load->view("product_category",$data);
}




////////// product page

function product(){
	$args=func_get_args();
			$this->load->library("pagination");
		$config["base_url"] = base_url() . "products/";
		$config['total_rows']= $this->db->count_all("product");
		$config['per_page'] = 10;
		$config["uri_segment"] = 2;

		// styling links
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_link'] = '<i class="fi-rs-arrow-small-left"></i>';
		$config['prev_tag_close'] = '</li>';
	
		$config['next_tag_open'] = '<li class="page-item" >';
        $config['next_link'] = '<i class="fi-rs-arrow-small-right"></i>';
		$config['next_tag_close'] = '</li>';
		$config['first_link'] = '<<';	
		$config['last_link'] = '>>';
	
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');
		$config['full_tag_close'] = '</ul>';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;


			// implode with * mark 
      if(!empty($args[0])){
		if (preg_match("/^[0-9]/i", $args[0]) ==0){			 
			$matches=explode("*", $args[0]);
			$match=array();
			// $i=1;
		    foreach($matches as $m){
			$match[$m]="1"; 
			// if((count($matches)-1)==$i){ break; }
			// $i++;
			} 
			// $match["orignal_price"]= "<".$matches[count($matches) - 1];
			// print_r($matches);
				$data["allproduct"] = $this->func->where_multi("product", $match);
				// $data["allproduct"] = $this->func->pagination("product", $config['per_page'], $page);
	      }
		else {
				$data["allproduct"] = $this->func->pagination("product", $config['per_page'], $page);
			}
	  } 
	  else{
		 $data["allproduct"] = $this->func->pagination("product", $config['per_page'], $page);
	  }
 
		$data['links'] = $this->pagination->create_links();

	$data['newitem']=$this->func->where_multi_desc("product",array("status"=>1));
	$data['items'] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['deal']=$this->func->get_all("today_deal");
	$this->load->view("product",$data);
}





////////// product-lists page

function product_list(){
			$this->load->library("pagination");
		$config["base_url"] = base_url() . "product-list/";
		$config['total_rows']= $this->db->count_all("product");
		$config['per_page'] = 5;
		$config["uri_segment"] = 2;

		// styling links
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_link'] = '<i class="fi-rs-arrow-small-left"></i>';
		$config['prev_tag_close'] = '</li>';
	
		$config['next_tag_open'] = '<li class="page-item" >';
        $config['next_link'] = '<i class="fi-rs-arrow-small-right"></i>';
		$config['next_tag_close'] = '</li>';
		$config['first_link'] = '<<';	
		$config['last_link'] = '>>';
	
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['attributes'] = array('class' => 'page-link');
		$config['full_tag_close'] = '</ul>';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$data["allproduct"] = $this->func->pagination("product", $config['per_page'], $page);
 
		$data['links'] = $this->pagination->create_links();

	$data['newitem']=$this->func->where_multi_desc("product",array("status"=>1));
	$data['items'] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['deal']=$this->func->get_all("today_deal");
	$this->load->view("product_list",$data);
}

//////////product details
function product_detail(){
	$args=func_get_args();
	$this->load->library("form_validation");
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['allproduct']=$this->func->get_all("product");
	$data['product']=$this->func->where_multi("product",array("url"=>$args[0]));
	$data['product_image']=$this->func->get_all("product_images");
	$data['category']=$this->func->get_all("product_category");
	$data['comments']=$this->func->where_desc("comments",array("product_url"=>$args[0]),);  $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('comment', 'Comment', 'trim|required|min_length[4]');
if($this->form_validation->run()==TRUE){
	if(empty($this->input->post("comment_id"))){  $comment_id=0; }
	else{ $comment_id= $this->input->post("comment_id"); }
  $insert=array(
	"product_url"=>$this->input->post("product"),
	"comment_id"=>$comment_id,
	"name"=>$this->input->post("name"),
	"email"=>$this->input->post("email"),
	"comment"=>$this->input->post("comment"),
	"time"=>date("F ").date("d, Y")." at ".date("h:i a")
  );	// December 4, 2021 at 3:12 pm
 $result= $this->func->insert_data("comments",$insert);
if($result){
	redirect('product-detail/'.$args[0],'refresh');
}
  
}
	$this->load->view("product_detail",$data);
}
//////////COMPARE 
function compare(){
	$args=func_get_args();
	// echo $args[0];
	// echo print_r($args);
	$this->load->library("form_validation");
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['allproduct']=$this->func->get_all("product");
	$data['product']=$this->func->where_multi("product",array("url"=>$args[0]));
	$data['product1']=$this->func->where_multi("product",array("url"=>$args[1]));
	$data['product_image']=$this->func->get_all("product_images");
	$data['category']=$this->func->get_all("product_category");
	$data['comments']=$this->func->where_desc("comments",array("product_url"=>$args[0]),);  
	$data['comments1']=$this->func->where_desc("comments",array("product_url"=>$args[1]),);  

	// $this->form_validation->set_rules('name', 'Name', 'required');
    // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// $this->form_validation->set_rules('comment', 'Comment', 'trim|required|min_length[4]');
// if($this->form_validation->run()==TRUE){
// 	if(empty($this->input->post("comment_id"))){  $comment_id=0; }
// 	else{ $comment_id= $this->input->post("comment_id"); }
//   $insert=array(
// 	"product_url"=>$this->input->post("product"),
// 	"comment_id"=>$comment_id,
// 	"name"=>$this->input->post("name"),
// 	"email"=>$this->input->post("email"),
// 	"comment"=>$this->input->post("comment"),
// 	"time"=>date("F ").date("d, Y")." at ".date("h:i a")
//   );	// December 4, 2021 at 3:12 pm
//  $result= $this->func->insert_data("comments",$insert);
// if($result){
// 	redirect('product-detail/'.$args[0],'refresh');
// }
  
// }
	$this->load->view("compare",$data);
}



////////////register page
function register(){
	$this->load->library("form_validation");
	$this->form_validation->set_rules("email","Email", "required|valid_email");
	$this->form_validation->set_rules("pass1","Password","required");
	$this->form_validation->set_rules("pass2","Password", "required|matches[pass1]");
	$this->form_validation->set_rules("captcha","Captcha","required|exact_length[4]");
	$this->form_validation->set_rules("checkbox","Checkbox","required");
		$data["items"] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
		$data['site'] = $this->func->get_all("site_setting");
		if($this->form_validation->run()){
		if(($this->input->post("login")==1 ) and ($this->input->post("captcha")==8675)){
			if($this->func->where_multi("user",array("email"=>"{$this->input->post('email')}"))){
              echo "<script>alert('THIS EMAIL {$this->input->post('email')} is already registerd\\nplease login');window.location.href='".base_url('login')."'</script>";
			}
			else{
			$pass1=$this->input->post("pass1");
			$pass2=$this->input->post("pass2");
		   	if(($pass1==$pass2) ){
          $data=array(
             "email"=>$this->input->post("email"),
			 "password"=>$pass1,
			 "added"=>date("Y/m/d h:i:sa"),
			 "updated"=>"not-yet"
		  );
          $user=array(
             "name"=>$this->input->post("email"),
             "email"=>$this->input->post("email"),
			 "mobile"=>"",
			 "shiping_address"=>"",
			 "billing_address"=>"",
			 "added"=>date("Y/m/d h:i:sa"),
			 "updated"=>"not-yet"
		  );
		  $result=$this->func->insert_data("user",$data);
		  $this->func->insert_data("user_detail",$user);
		  if($result){
			$this->session->set_userdata("nestuser",$this->input->post("email"));
			redirect('','refresh');
			}}}}
		  else{
			echo "<script>alert('SORRY \\nCaptcha Not Valid')</script>";
				$this->load->view("register", $data);
		  }
		}
		else{
	$this->load->view("register",$data);
		}
}

////////user account and user setting  
function account(){
		$data["items"] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
		$data['site'] = $this->func->get_all("site_setting");
		$data['user'] = $this->func->where_multi("user_detail", array("email" => $this->session->userdata("nestuser")));
		$data["orders"] = $this->func->where_multi("order", array("email"=> $this->session->userdata("nestuser")));
		if($this->input->post("submit")==1){
		$find=$this->func->where_multi("user_detail",array("email"=>$this->input->post("email")));
			// echo "<script>alert('{$find[0]->id}')</script>";
		$user = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"mobile" =>  $this->input->post("mobile"),
			"shiping_address" => $this->input->post("sadd"),
			"billing_address" => $this->input->post("badd"),
			"added" => date("Y/m/d h:i:sa"),
			"updated" => "not-yet"
		);
			$result = $this->func->update_data("user_detail", $user,$find[0]->id);
			if($result){
				$finduserid=$this->func->where_multi("user",array("email"=>$this->input->post("email")));
				$currpass=$this->input->post("currpass");
				$newpass=$this->input->post("newpass");
				$newconfpass=$this->input->post("newconfpass");
				if($currpass==$finduserid[0]->password){
                 if($newconfpass==$newpass){
                 
						$pas = array(
							"password" => $newpass,
							"updated" => date("Y/m/d h:i:sa"),
						);
						$updated=$this->func->update_data("user",$pas,$finduserid[0]->id);
						if($updated){
							echo "<script>alert('PASSWORD UPDATED SUCCESSFULLY');window.location.href='".base_url("account")."'</script>";
						}
				 }
				 else{
					echo "<script>alert('PASSWORD DOESN`T MATCH')</script>";
				 }
				}
				else{
				redirect('account','refresh');
				}
			}
	}
	$this->load->view("account",$data);
}

///////////for login page
function login(){
	$this->load->library("form_validation");
		$data["items"] = $this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
		$data['site'] = $this->func->get_all("site_setting");
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('pass', 'Password', 'required');
	$this->form_validation->set_rules('captcha', 'Captcha', 'required|exact_length[4]|numeric');
	if ($this->form_validation->run() == TRUE) {
     if(($this->input->post("login")==1) and ($this->input->post("captcha")==8675)){
		$result=$this->func->where_multi("user",array("email"=>$this->input->post("email") ,"password"=>$this->input->post("pass")));
		if($result){
			       if($this->input->post("checkbox")){
					 $this->session->set_userdata("loginuser",$this->input->post("email"));
					 $this->session->set_userdata("loginpass",$this->input->post("pass"));}
					 $this->session->set_userdata("nestuser",$this->input->post("email"));
					 redirect('','refresh');
				}
		else{ $data['err']="USER ID & PASSWORD DOESN`T MATCH";
					$this->load->view("login", $data); }
	 }
	 else{
		        echo "<script>alert('SORRY\\nCAPTCHA DOES NOT MATCH');</script>";
				$this->load->view("login", $data);
	 }
	}
	 else {
     $this->load->view("login",$data);
	}
	
}


///////////logout page
function logout(){
	$this->load->view("logout");
}




///////////print invoice 
function invoice(){
	$args=func_get_args();
	$data['user']=$this->func->where_multi("user_detail",array("email"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['myproducts']=$this->func->where_multi("order",array("order_no"=>$args[0]));
	$this->load->view("invoice",$data);
}




///////////privacy policy
function privacy(){
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['latest']=$this->func->get_all_id_desc("product");
	$this->load->view("privacy",$data);
}


/////////// term of service
function purchase(){
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['latest']=$this->func->get_all_id_desc("product");
	$this->load->view("purchaseguide",$data);
}

/////////// term of service
function terms(){
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$data['latest']=$this->func->get_all_id_desc("product");
	$this->load->view("Termservice",$data);
}



/////////// wishlist
function wishlist(){
	$data["items"]=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
	$data['category']=$this->func->get_all("product_category");
	$data['product']=$this->func->get_all("product");
	$data['product_image']=$this->func->get_all("product_images");
	$this->load->view("wishlist",$data);
}











///////checkout
function checkout(){
	$data['items']=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
	$data['site']=$this->func->get_all("site_setting");
    $data["user"]=$this->func->where_multi("user_detail",array("email"=>$this->session->userdata("nestuser")));;

	if($this->input->post("save")==1){
    	$find=$this->func->where_multi("user_detail",array("email"=>$this->input->post("email")));
		$user = array(
			"name" => $this->input->post("name"),
			"mobile" =>  $this->input->post("mobile"),
			"shiping_address" => $this->input->post("sadd"),
			"billing_address" => $this->input->post("badd"),
			"updated" => date("Y/m/d h:i:sa")
		);
			$result = $this->func->update_data("user_detail", $user,$find[0]->id);
			if($result){
				redirect("checkout","refresh");
			}
	}
	if($this->input->post("payment")=="COD"){
		$orderno=rand(10000,99999);
		// echo "<script>alert('working');</script>";
		$userdeatils=$this->func->where_multi("user_detail",array("email"=>$this->session->userdata("nestuser")));
		$product=$this->cart->contents();
		// echo $userdeatils[0]->name;
		foreach($product as $p):
		$order= array(
			"order_no" => $orderno,
			"image" =>  $p['options']["image"],
			"product_name" => $p['name'] ,
			"price" => $p['price'],
			"quantity" => $p['qty'],
			"total" => $p['price']*$p['qty'],
			"customer_name" =>$userdeatils[0]->name ,
			"email" =>$userdeatils[0]->email ,
			"mobile" =>$userdeatils[0]->mobile,
			"address" =>$userdeatils[0]->shiping_address,
			"status" =>"1",
			"product_url" =>$p['options']['url'],
			"recived_time" => date("Y/m/d h:i:sa")
		);
		$ordered=$this->func->insert_data("order",$order);
	endforeach;
	 if($ordered){
		$this->cart->destroy();
    echo "<script>alert('YOUR PRODUCT ARE ORDERED SUCCESSFULLY\\nCONTINUE SHOPPING \\nTHANKYOU');window.location.href='".base_url()."'</script>";
	 }
	}
	$this->load->view("checkout",$data);
}




///////////////show cart
function cart(){
	$data['items']=$this->cart->contents();
		$data['wishlist'] = $this->func->where_multi("wishlist",array("user"=>$this->session->userdata("nestuser")));
    $data["site"]=$this->func->get_all("site_setting");
	$data['cart']=$this->cart->contents();
	$this->load->view("cart",$data);
}


	////////////////add to cart///////////////
	function add_to_cart()
	{
		$data = array(
			'id'      => $this->input->post("id"),
			'name'    => $this->input->post("name"),
			'price'   => $this->input->post("price"),
			'qty'     => $this->input->post("quantity"),
			'options' => array(
				'image' => $this->input->post("image"),
				"url"=>$this->input->post("producturl")
			)

		);
		$this->cart->insert($data);
		$this->session->set_tempdata('flash','1', 2);
		echo  "ADDED TO CART";
	}

	/////////////////delete cart//////////////////
	function delete_cart()
	{
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0
		);
		$this->cart->update($data);
		echo "DELETED";
		$this->session->set_tempdata('delete', '1', 2);
	}

	/////////////////update quantity cart//////////

	function update_cart()
	{
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => $this->input->post("quantity")
		);
		$this->cart->update($data);
		echo "UPDATED";
	}




	////////////////add to wishlist///////////////
	function add_to_wishlist()
	{
		if(!empty($this->session->userdata("nestuser"))){
		$data = array(
			'user'      => $this->session->userdata("nestuser"),
			'product_id'      => $this->input->post("id"),
			'name'    => $this->input->post("name"),
			'price'   => $this->input->post("price"),
			'image' => $this->input->post("image"),
			"url" => $this->input->post("producturl")
		);
		$this->func->insert_data("wishlist",$data);
		$this->session->set_tempdata('wish_add', '1', 2);
		echo 1;
	}
		else{
			echo base_url("login");
		}
	}
 

	function wishdelete(){
		$args=func_get_args();
		$result=$this->func->delete_data("wishlist",$args[0]);
		if($result){
			redirect('wishlist','refresh');
		}
	}








	///////////////////////live search

  function livesearch(){
	$search =$this->input->post("search");
	$result=$this->db->query("SELECT heading,url FROM product WHERE heading LIKE '%{$search}%' LIMIT 10")->result_array();
    echo json_encode($result);
  }


//////not found or 404 page
 function not_found_404(){
$this->load->view("404");
 }

}


?>
