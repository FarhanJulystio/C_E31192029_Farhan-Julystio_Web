<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitunglingkaran2 extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('Lingkaran');
        $this->load->model('KL_Lingkaran');
        $this->load->helper('form');
    }

    function index()
    {
        $this->benchmark->mark('code_start');
        $var1 = $this->input->post('luas');
        $var2 = $this->input->post('keliling');

        $data = [
            "luas" => $this->KL_Lingkaran->getLuas($var1),
            "jari1" => $var1,
            "keliling" => $this->KL_Lingkaran->getKeliling($var2),
            "jari2" => $var2
        ];
        $this->benchmark->mark('code_end');

        $data['waktu'] = $this->benchmark->elapsed_time('code_start', 'code_end',8);
		$this->load->view('lingkaran/index', $data);
    }
}