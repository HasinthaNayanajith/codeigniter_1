<?php
class Book extends CI_Controller
{
	/***** VIEWS *****/
	public function index()
	{
		$this->load->model('_Book');
		$data['books'] = $this->_Book->get_books();
		$this->load->view('admin/books', $data);
	}

	public function add_new()
	{
		$this->load->view('admin/add_new_book');
	}


	/***** FUNCTIONS *****/
	public function addNewBook()
	{
		/****** FORM VALIDATION ******/
		$this->form_validation->set_rules('isbn', 'ISBN', 'required|is_unique[books.isbn]');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('rack', 'Rack Number', 'required');
		$this->form_validation->set_rules('edition', 'Edition', 'required');
		$this->form_validation->set_rules('regDate', 'Register Date', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('admin/add_new_book');
		} else {

			$this->load->model('_Book');
			$result = $this->_Book->add();

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
