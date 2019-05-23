<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Backend_Controller
{
    // public function index()
    // {
    //     $data = [
    //         'user_role_id' => 1,
    //         'username' => 'Superadmin',
    //         'profile_image' => 'default.png',
    //         'group' => 'admin',
    //         'password' => bCrypt('admin', 12),
    //         'created_on' => date('Y-m-d H:i:s'),
    //         'email' => 'ahmad.muharik@mncbank.co.id',
    //         'active' => 1
    //     ];

    //     $this->User_model->insert($data);
    // }

    public function login()
    {
        $data = [
            'title' => 'MNC Bank | Login'
        ];
        $this->site->view('login', $data);
    }

    public function profileAccount()
    {
        $data = [
            'title' => 'MNC Bank | Profile Account'
        ];
        $this->site->view('profile-account', $data);
    }

    public function logout()
    {
        //     $this->session->sess_destroy();
        //     delete_cookie('username');
        //     delete_cookie('password');
        redirect(admin_url('login'));
    }
}
