<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends MY_Model
{
    protected $table_name    = 'user';
    protected $primary_key   = 'ID';
    protected $order_by      = 'ID';
    protected $order_by_type = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }
}
