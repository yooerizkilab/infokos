<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page'] = 'index';
        $this->load->view('backend/admin/layouts/app', $data);
    }

    public function alluser()
    {
        $data['title'] = 'Data Member';
        $data['page'] = 'member';
        $data['datatable'] = 'member_datatable';
        $this->load->view('backend/admin/layouts/app', $data);
    }
}
