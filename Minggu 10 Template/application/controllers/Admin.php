<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('lib_template');
    }

	public function index()
	{
		$data['tes'] = "null";
		$konten = 'Admin/Konten/index';
		$this->lib_template->views($konten, $data);
	}
}
