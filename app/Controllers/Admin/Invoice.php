<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Invoice extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Invoice';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->crop = \Config\Services::image();
    }

    public function index()
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {

            $table = DB()->table('invoice');
            $data['invoice'] = $table->get()->getResult();
            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Invoice/list',$data);
            echo view('Admin/footer');
        }
    }









}