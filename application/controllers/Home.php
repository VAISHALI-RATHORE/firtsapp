<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     function __construct() {
	    parent:: __construct();
	    $this->load->helper('url');
	    $this->load->database();
	    $this->load->model('blog_model');
  	}
	
	 public function index() {
		 $up['data1']=$this->blog_model->fetch();
		 $this->load->view('View',$up);
	}
	
	public function insert(){
		 if ($this->input->post()) {
			$comment = $this->input->post('comment');
			$article_id = $this->input->post('article_id');
            $data = array( 'article_id' => $article_id, 'comment' => $comment );
            $this->blog_model->form_insert($data);
            $this->post_data($data['$article_id']);

        }
	}
	public function post_data($id){
		    $article['data_article']=$this->blog_model->fetch_article($id);
		    $comment['data_comment']=$this->blog_model->fetch_comment($id);
            $data = array( 'article' => $article, 'comment' => $comment );
  			$this->load->view('View_post',$data);
	}

	
}
