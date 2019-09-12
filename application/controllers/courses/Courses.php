<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {


	public function index()
	{
		$this->load->view('courses/common/header');
		$this->load->view('courses/index');
		$this->load->view('courses/common/footer');
	}

	public function course()
    {
        $this->load->view('courses/common/header');
        $this->load->view('courses/course');
        $this->load->view('courses/common/footer');
    }
}
