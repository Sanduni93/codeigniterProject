<?php
class User extends CI_Controller
{
  public function _construct()
  {

   parent::_construct();
   if (!isset($_SESSION['user_logged'])) 
   {
     $this->session->set_flashdata("error","Please login first with correct details to view this page");
     redirect("auth/login");
   }

  }


  public function profile()
  {
        
    $this->load->model('Profile_model');
    $data["fetch_data"] = $this->Profile_model->fetch_data();
    $this->load->view('profile',$data);
	}
}
?>