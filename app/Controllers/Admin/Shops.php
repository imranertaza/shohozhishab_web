<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Shops extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Shops';

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

            $table = DB()->table('shops');
            $data['shops'] = $table->get()->getResult();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Shops/list',$data);
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
            'price' => ['label' => 'Price', 'rules' => 'required|is_natural_no_zero|max_length[32]'],
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
            $data['action'] = base_url('Admin/Shops/update_action');

            $table = DB()->table('shops');
            $data['shop'] = $table->where('shop_id',$id)->get()->getRow();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Shops/update',$data);
            echo view('Admin/footer');
        }
    }

    public function update_package($id)
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/Shops/update_package_action');

            $table = DB()->table('shops');
            $data['shop'] = $table->where('shop_id',$id)->get()->getRow();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Shops/update_package',$data);
            echo view('Admin/footer');
        }
    }

    public function update_action(){
        $userId = $this->session->userIdAd;

        $shop_id = $this->request->getPost('shop_id');
        $data['shopName'] = $this->request->getPost('shopName');
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        $data['updatedBy'] = $userId;

        $this->validation->setRules([
            'shopName' => ['label' => 'shopName', 'rules' => 'required|'],
            'email' => ['label' => 'email', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Shops/update/'.$shop_id));
        } else {
            if ($this->email_check_update($data['email'],$data['shop_id']) == true) {
                $shShopId = get_data_by_id('shohozHishab_shop_id','shops','shop_id',$data['shop_id']);
                if (custome_db_email_exists_check_update($data['email'],$shShopId) == true) {
                    DB()->transStart();
                    $table = DB()->table('shops');
                    $table->where('shop_id', $shop_id)->update($data);
                    if (!empty($shShopId)) {
                        $db2 = \Config\Database::connect('custom');
                        $newDb = $db2->database;
                        DB()->query('use ' . $newDb);

                        $shopStData['name'] = $data['shopName'];
                        $shopTable = $db2->table('shops');
                        $shopTable->where('sch_id', $shShopId)->update($shopStData);

                        $usershData['name'] = $data['shopName'];
                        $usershData['email'] = $data['email'];
                        $usershData['password'] = sha1($data['password']);
                        $tabUs = $db2->table('users');
                        $tabUs->where('sch_id', $shShopId)->where('is_default', '1')->update($usershData);
                    }
                    DB()->transComplete();

                    $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    return redirect()->to(site_url('Admin/Shops/update/' . $shop_id));
                }else{
                    $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">This email already exists<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    return redirect()->to(site_url('Admin/Shops/update/' . $shop_id));
                }
            }else{
                $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">This email already exists<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                return redirect()->to(site_url('Admin/Shops/update/' . $shop_id));
            }

        }
    }

    public function delete($id){
        $packagesTab = DB()->table('shops');
        $packagesTab->where('shop_id',$id)->delete();

        $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Delete successful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect()->to(site_url('Admin/Shops'));

    }






}