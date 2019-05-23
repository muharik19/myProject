<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Backend_Controller
{
    public function index()
    {
        $data = [
            'title' => 'MNC Bank | Dashboard'
        ];
        $this->site->view('index', $data);
    }
}
