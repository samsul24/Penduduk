<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserLogin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');


    $this->API = "http://localhost:8080/keluarga/user";
    $this->API = "http://localhost:8080/keluarga/keluhan";

  }

  public function index()
  {
    $this->load->library('curl');

    $data['user'] = json_decode($this->curl->simple_get($this->API));
    $data['title'] = "Dashboard";
    // $this->load->view('header4', $data, FALSE);
    $this->load->view('user/index', $data, FALSE);
    // $this->load->view('footer', $data, FALSE);
  }
  public function keluhan()
  {
      $data['keluhan'] = json_decode($this->curl->simple_get($this->API));
      $data['title'] = "keluhan";
      $this->load->view('user/keluhan', $data, FALSE);
  }
}
