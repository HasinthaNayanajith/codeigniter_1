<?php
class _Book extends CI_Model
{
	public function get_books(){

		$query = $this->db->get('books');
		return $query->result_array();
	}

	public function add()
	{
		$data = array(
			'isbn' => $this->input->post('isbn', TRUE),
			'title' => $this->input->post('title', TRUE),
			'author' => $this->input->post('author', TRUE),
			'racknumber' => $this->input->post('rack', TRUE),
			'edition' => $this->input->post('edition', TRUE),
			'regdate' => $this->input->post('regDate', TRUE)
		);

		$result = $this->db->insert('books', $data);

		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
}
