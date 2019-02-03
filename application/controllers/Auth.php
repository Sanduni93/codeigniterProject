<?php 
class Auth extends CI_Controller
{
	public function login()
  {
		$this->form_validation->set_rules('username','Username is','required');
		$this->form_validation->set_rules('password','Password is','required|min_length[6]');

      //if form validation true of login
		if ($this->form_validation->run() == TRUE) {
			
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			//check users from the db
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where(array('username' => $username, 'password' => $password));
    $query=$this->db->get();

    $user = $query->row();
      //whether user exists
      if ($user->name) 
      {
      $this->session->set_flashdata("success", "You are granted");	

            //session variables
      $_SESSION['user_logged'] = TRUE;
      $_SESSION['username'] = $user->username;

            //redirect to profile page
      redirect("user/profile","refresh");
      }
      else
      {
      $this->session->set_flashdata("error", "No such account exists");
            
            //redirect to login page
      redirect("auth/login","refresh");
      }
      }
       $this->load->view('login');
	}
    
   
	public function reg1()
  {

  if (isset($_POST['reg1']))
  {
		$this->form_validation->set_rules('name','Name is','required');
		$this->form_validation->set_rules('dob','Date of Birth is','required');
		$this->form_validation->set_rules('gender','Gender is','required');
		$this->form_validation->set_rules('username','Username is','required');
		$this->form_validation->set_rules('password','Password is','required|min_length[6]');


		//if form validation true

		if ($this->form_validation->run() == TRUE) {
		  echo 'Form validated';
             
        //add user to the db
          
      $data =  array(
      'name' => $_POST['name'],
      'dob' => $_POST['dob'],
      'gender' => $_POST['gender'],
      'username' => $_POST['username'],
      'password' =>md5($_POST['password'])
      );      

    $this->db->insert('users',$data);
    $this->session->set_flashdata("success", "Your account has been created. Now you can login.");
    redirect("auth/reg1", "refresh");
    }	
		}
    $this->load->view('reg1');
	}

  public function logout()
  {
    unset($_SESSION);
    redirect("auth/login","refresh");
  }
}
?>