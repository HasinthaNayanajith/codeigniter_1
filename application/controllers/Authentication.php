<?php
class Authentication extends CI_Controller
{
	public function login()
	{

		/****** FORM VALIDATION ******/
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/login');
		} else {

			$this->load->model('User');
			$result = $this->User->login();

			if (!$result) {

				/***** INCORRECT EMAIL OR PASSWORD *****/
				$this->session->set_flashdata('errmsg', 'Wrong email and password');
				redirect('Home/login');
			} else {

				/***** LOGIN SUCCEEDED. CREATE SESSION *****/
				$user_data = array(
					'id' => $result->id,
					'email' => $result->email,
					'loggedIn' => TRUE
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('welocme', 'Welcome back');
				redirect('Dashboard/index');
			}
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('loggedIn');
		redirect('Home/login');
	}
}
