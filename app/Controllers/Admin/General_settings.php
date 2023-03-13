<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class General_settings extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'General_settings';

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

            $table = DB()->table('genarel_settings');
            $data['gnData'] = $table->get()->getResult();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/General_settings/list',$data);
            echo view('Admin/footer');
        }
    }

    public function create()
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/General_settings/action');

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/General_settings/create',$data);
            echo view('Admin/footer');
        }
    }

    public function action(){

        $userId = $this->session->userIdAd;

        $data['title'] = $this->request->getPost('title');
        $data['value'] = $this->request->getPost('value');
        $data['createdBy'] = $userId;
        $data['createdDtm'] = date('Y-m-d h:i:s');

        $this->validation->setRules([
            'title' => ['label' => 'Title', 'rules' => 'required'],
            'value' => ['label' => 'Value', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/General_settings/create'));
        } else {

            $table = DB()->table('genarel_settings');
            $table->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> create successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/General_settings/create'));

        }
    }

    public function update($id)
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/General_settings/update_action');

            $table = DB()->table('genarel_settings');
            $data['genData'] = $table->where('genarel_settings_id',$id)->get()->getRow();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/General_settings/update',$data);
            echo view('Admin/footer');
        }
    }

    public function update_action(){
        $userId = $this->session->userIdAd;

        $genarel_settings_id = $this->request->getPost('genarel_settings_id');
        $data['value'] = $this->request->getPost('value');
        $data['updatedBy'] = $userId;

        $this->validation->setRules([
            'value' => ['label' => 'Value', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/General_settings/update/'.$genarel_settings_id));
        } else {

            $table = DB()->table('genarel_settings');
            $table->where('genarel_settings_id',$genarel_settings_id)->update($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/General_settings/update/'.$genarel_settings_id));

        }
    }

    public function delete($id){

        $General_settingssTab = DB()->table('genarel_settings');
        $General_settingssTab->where('genarel_settings_id',$id)->delete();

        $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Delete successful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect()->to(site_url('Admin/General_settings'));

    }






}