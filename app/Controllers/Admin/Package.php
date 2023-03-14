<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Package extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Package';

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

            $table = DB()->table('packages');
            $data['package'] = $table->get()->getResult();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Package/list',$data);
            echo view('Admin/footer');
        }
    }

    public function create()
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/Package/action');

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Package/create',$data);
            echo view('Admin/footer');
        }
    }

    public function action(){

        $userId = $this->session->userIdAd;

        $data['name'] = $this->request->getPost('name');
        $data['price'] = $this->request->getPost('price');
        $data['subscription_type'] = $this->request->getPost('subscription_type');
        $data['installation_fee'] = $this->request->getPost('installation_fee');
        $data['software_pack_id'] = $this->request->getPost('software_pack_id');
        $data['	createdBy'] = $userId;
        $data['createdDtm'] = date('Y-m-d h:i:s');

        $this->validation->setRules([
            'name' => ['label' => 'Name', 'rules' => 'required|'],
            'price' => ['label' => 'Price', 'rules' => 'required|max_length[32]'],
            'subscription_type' => ['label' => 'Subscription Type', 'rules' => 'required'],
            'installation_fee' => ['label' => 'Installation Fee', 'rules' => 'required'],
            'software_pack_id' => ['label' => 'Software Pack', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package/create'));
        } else {

            $table = DB()->table('packages');
            $table->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> create successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package/create'));

        }
    }

    public function update($id)
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/Package/update_action');

            $table = DB()->table('packages');
            $data['package'] = $table->where('package_id',$id)->get()->getRow();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Package/update',$data);
            echo view('Admin/footer');
        }
    }

    public function update_action(){
        $userId = $this->session->userIdAd;

        $package_id = $this->request->getPost('package_id');
        $data['name'] = $this->request->getPost('name');
        $data['price'] = $this->request->getPost('price');
        $data['subscription_type'] = $this->request->getPost('subscription_type');
        $data['installation_fee'] = $this->request->getPost('installation_fee');
        $data['software_pack_id'] = $this->request->getPost('software_pack_id');
        $data['updatedBy'] = $userId;

        $this->validation->setRules([
            'name' => ['label' => 'Name', 'rules' => 'required|'],
            'price' => ['label' => 'Price', 'rules' => 'required|max_length[32]'],
            'subscription_type' => ['label' => 'Subscription Type', 'rules' => 'required'],
            'installation_fee' => ['label' => 'Installation Fee', 'rules' => 'required'],
            'software_pack_id' => ['label' => 'Software Pack', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package/update/'.$package_id));
        } else {

            $table = DB()->table('packages');
            $table->where('package_id',$package_id)->update($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package/update/'.$package_id));

        }
    }

    public function delete($id){
        $orderTab = DB()->table('orders');
        $orderCheck = $orderTab->where('package_id',$id)->countAllResults();

        if ($orderCheck == 0){
            $packagesTab = DB()->table('packages');
            $packagesTab->where('package_id',$id)->delete();

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Delete successful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package'));
        }else{
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">This package is already used by an account<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Package'));
        }
    }






}