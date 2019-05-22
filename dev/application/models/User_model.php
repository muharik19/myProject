<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends MY_Model
{
    protected $_table_name = 'user';
    protected $_primary_key = 'ID';
    protected $_order_by = 'ID';
    protected $_order_by_type = 'DESC';
}
