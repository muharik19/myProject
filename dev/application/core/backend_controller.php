<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper([]);
        $this->load->library([]);
        $this->load->model([]);

        $this->site->side = 'backend';
        $this->site->template = 'metronic';
    }
}
