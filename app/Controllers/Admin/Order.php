<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Order extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Order';

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

            $table = DB()->table('orders');
            $data['orders'] = $table->get()->getResult();
            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Order/list',$data);
            echo view('Admin/footer');
        }
    }

    public function view($id){
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {

            $table = DB()->table('billing');
            $data['billing'] = $table->where('billing_id',$id)->get()->getRow();
            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Order/view',$data);
            echo view('Admin/footer');
        }
    }

    public function changeStatus(){
        $status = $this->request->getPost('value');
        $id = $this->request->getPost('id');
        $data['status'] = $status;
        $table = DB()->table('billing');
        $table->where('billing_id',$id)->update($data);

        print true;
    }







}