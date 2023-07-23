<?php
class Member extends CI_Controller
{
	/***** VIEWS *****/
	public function index()
	{
		$this->load->model('_Member');
		$data['members'] = $this->_Member->get_members();
		$this->load->view('admin/members', $data);
	}

	public function add_new()
	{
		$this->load->view('admin/add_new_member');
	}


	/***** FUNCTIONS *****/
	public function addNewMember()
	{
		/****** FORM VALIDATION ******/
		$this->form_validation->set_rules('nic', 'NIC', 'required|is_unique[members.nic]');
		$this->form_validation->set_rules('fullname', 'Full Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('birthday', 'Birth Day', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[members.email]');
		$this->form_validation->set_rules('regDate', 'Register Date', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/add_new_member');
		} else {

			$this->load->model('_Member');
			$result = $this->_Member->add();

			if (!$result) {

				/***** FAILED *****/
				$this->session->set_flashdata('errmsg', 'Something went wrong.');
				$this->add_new();
			} else {

				/***** SUCCEEDED. *****/
				$this->index();
			}
		}
	}
}
