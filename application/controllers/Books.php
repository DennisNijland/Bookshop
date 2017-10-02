<?php
class Books extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Books_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['books'] = $this->Books_model->get_books();
        $data['title'] = 'All books';

        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
        $data['books_item'] = $this->Books_model->get_books($slug);

        if (empty($data['books_item']))
        {
                show_404();
        }

        $data['title'] = $data['books_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('books/view', $data);
        $this->load->view('templates/footer');
        }
        public function create()
        {
         $this->load->helper('form');
         $this->load->library('form_validation');

        $data['title'] = 'Add a new book';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('genre', 'Genre', 'required');
        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() === FALSE)
         {
         $this->load->view('templates/header', $data);
         $this->load->view('books/create');
         $this->load->view('templates/footer');

        }
        else
        {
        $this->Books_model->set_books();
        $this->load->view('books/success'); }}

    public function edit($id){

            $id = $this->uri->segment(3);

            if (empty($id))
            {
                show_404();
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Edit a book';
            $data['books_item'] = $this->Books_model->get_books_by_id($id);                                    

	        $this->form_validation->set_rules('title', 'Title', 'required');
	        $this->form_validation->set_rules('author', 'Author', 'required');
	        $this->form_validation->set_rules('genre', 'Genre', 'required');
	        $this->form_validation->set_rules('year', 'Year', 'required');
	        $this->form_validation->set_rules('description', 'Description', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('books/edit', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->Books_model->set_books($id);
                redirect( base_url() . 'index.php/books');
            };
        }

        public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $books_item = $this->Books_model->get_books_by_id($id);
        
        $this->Books_model->delete_books($id);        
        redirect( base_url() . 'index.php/books');        
    }
}

