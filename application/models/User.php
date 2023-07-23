<?php
class User extends CI_Model
{

	public function login()
	{

		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);

		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$rows = $this->db->get('users');

		if ($rows->num_rows() == 1) {
			return $rows->row(0);
		} else {
			return false;
		}
	}
}
