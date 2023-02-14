<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Subscribe extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Subscribe';

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

            $table = DB()->table('subscribe');
            $data['subscribe'] = $table->get()->getResult();
            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Subscribe/list',$data);
            echo view('Admin/footer');
        }
    }


    public function subscribeStatus(){
        $status = $this->request->getPost('value');
        $id = $this->request->getPost('id');
        $data['status'] = $status;
        $table = DB()->table('subscribe');
        $table->where('subscribe_id',$id)->update($data);

        print true;
    }







}