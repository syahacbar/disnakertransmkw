<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manual_book extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('manual_book', $this->page_data);
    }
}