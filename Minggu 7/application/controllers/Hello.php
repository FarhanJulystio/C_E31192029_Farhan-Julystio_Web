<?php

class Hello extends CI_Controller {
  public function index() {
    $this->load->model('Hello_model');
    $model = $this->Hello_model;
    $a = $model->txt;
    $data['teks'] = $a;
    $this->load->view('helloview', $data);
  }
}