<?php
class _Member extends CI_Model
{
	public function get_members(){

		$query = $this->db->get('members');
		return $query->result_array();
	}

	public function add()
	{
		$data = array(
			'nic' => $this->input->post('nic', TRUE),
			'fullname' => $this->input->post('fullname', TRUE),
			'address' => $this->input->post('address', TRUE),
			'birthday' => $this->input->post('birthday', TRUE),
			'mobile' => $this->input->post('mobile', TRUE),
			'email' => $this->input->post('email', TRUE),
			'regdate' => $this->input->post('regDate', TRUE)
		);

		$result = $this->db->insert('members', $data);

		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
}
