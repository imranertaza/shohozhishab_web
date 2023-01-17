<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Libraries\Permission;
use App\Models\LicenseModel;
use App\Models\ShopsModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    protected $permission;
    protected $validation;
    protected $session;
    private $module_name = 'Dashboard';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {

            $data['menu_select'] = 'dashboard';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/dashboard',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function package_list()
    {
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {
            $table = DB()->table('packages');
            $data['pack'] = $table->get()->getResult();

            $data['menu_select'] = 'package_list';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/package_list',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function my_package()
    {
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {
            $table = DB()->table('packages');
            $data['pack'] = $table->get()->getResult();

            $data['menu_select'] = 'my_package';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/my_package',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function my_bill()
    {
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {


            $data['menu_select'] = 'my_bill';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/my_bill',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function tutorial(){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {


            $data['menu_select'] = 'tutorial';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/tutorial',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function user_guide(){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {


            $data['menu_select'] = 'user_guide';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/user_guide',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function profile(){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {
            $userId = $this->session->user_id;
            $table = DB()->table('users');
            $data['pro'] = $table->where('user_id',$userId)->get()->getRow();
            $data['menu_select'] = 'profile';
            $data['top_mer'] = view('web/da_top_btn');
            echo view('web/header_dashboard');
            echo view('web/sidebar',$data);
            echo view('Web/profile',$data);
            echo view('Web/footer_dashboard');
        }
    }



}