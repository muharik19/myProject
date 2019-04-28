<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site
{
    // property dengan hak akses public templates
    public $side;
    public $template;
    public $template_setting;
    public $website_setting;
    public $isHome     = false;
    public $isCategory = false;
    public $isSearch   = false;
    public $isDetail   = false;

    public function view($pages, $data = null)
    {
        $me = get_instance();
        $data ? $me->load->view($this->side . '/' . $this->template . '/' . $pages, $data) : $me->load->view($this->side . '/' . $this->template . '/' . $pages);
    }
}
