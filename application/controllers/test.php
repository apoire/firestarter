<?php

class Test extends CI_Controller {

   function __construct()
   {
       parent::__construct();
       $this->load->model('testmodel');
   }

   public function index()
   {
       $data = array(
           'rows' => $this->db->get('test'),
       );
       $this->load->view('test/index', $data);
   }

   public function add()
   {
       $this->load->view('test/add');
   }

   public function add_validate()
   {
       $this->load->library('form_validation');
       $this->form_validation->set_rules('name', 'Name', 'trim|required');
       if ($this->form_validation->run() == false) {
           $this->add();
       } else {
           $data = array(
               'name' => $this->input->post('name'),
           );
           $this->db->insert('test', $data);
           $this->index();
       }
   }

   public function edit($id)
   {
       $row = $this->db->get_where('post', array('id' => $id))->row();
       $data = array(
           'row' => $row,
       );
       $this->load->view('test/edit', $data);
   }

   public function edit_validate($id)
   {
       $this->load->library('form_validation');
       $this->form_validation->set_rules('name', 'Name', 'trim|required');
       if ($this->form_validation->run() == false) {
           $this->edit();
       } else {
           $data = array(
               'name' => $this->input->post('name'),
           );
           $this->db->where('id', $id);
           $this->db->update('test', $data);
           $this->index();
       }
   }

   public function delete($id)
   {
       $this->db->delete('post', array('id' => $id));
       $this->index();
   }

}
