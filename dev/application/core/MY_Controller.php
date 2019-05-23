<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['template_helper', 'user_helper']);
        $this->load->library(['Site', 'session']);
        $this->load->model([]);
    }
}
