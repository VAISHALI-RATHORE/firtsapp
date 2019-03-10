<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('test');
  	}
	public function index() {
		$this->load->view('form');
		
	}
	public function user($user=0){
		if ($this->input->post('Register')) {
			$data = array(
                'username' =>$this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);}
		if($user==0){
			$result['data'] = $this->test->form_insert($data);
			if($result) {
				$this->load->view('form',$result);
			}
		}
		else{
			    $data['id']=$user;
                $this->test->update($data);
				$up['data']=$this->test->fetch();
				$this->load->view('form',$up);
			}
	}

		public function delete($id){
		    $this->test->delete($id);
			$del['data']=$this->test->fetch();
			$this->load->view('form',$del);
		}

		public function update($id) {
            $up['data1']=$this->test->fetch($id);
		    $this->load->view('form',$up);
		}

		
	}
?>
