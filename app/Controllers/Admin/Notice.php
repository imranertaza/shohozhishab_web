<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Permission;


class Notice extends BaseController
{
    protected $validation;
    protected $session;
    protected $crop;
    private $module_name = 'Notice';

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

            $table = DB()->table('notice');
            $data['notice'] = $table->get()->getResult();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Notice/list',$data);
            echo view('Admin/footer');
        }
    }

    public function create()
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/Notice/action');

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Notice/create',$data);
            echo view('Admin/footer');
        }
    }

    public function action(){

        $userId = $this->session->userIdAd;

        $data['title'] = $this->request->getPost('title');
        $data['description'] = $this->request->getPost('description');
        $data['createdBy'] = $userId;
        $data['createdDtm'] = date('Y-m-d h:i:s');

        $this->validation->setRules([
            'title' => ['label' => 'Title', 'rules' => 'required'],
            'description' => ['label' => 'Description', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Notice/create'));
        } else {

            $table = DB()->table('notice');
            $table->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> create successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Notice/create'));

        }
    }

    public function update($id)
    {
        $isLoggedInWebAdmin = $this->session->isLoggedInWebAdmin;
        if (!isset($isLoggedInWebAdmin) || $isLoggedInWebAdmin != TRUE) {
            return redirect()->to(site_url('Admin/login'));
        } else {
            $data['action'] = base_url('Admin/Notice/update_action');

            $table = DB()->table('notice');
            $data['notice'] = $table->where('notice_id',$id)->get()->getRow();

            echo view('Admin/header');
            echo view('Admin/sidebar');
            echo view('Admin/Notice/update',$data);
            echo view('Admin/footer');
        }
    }

    public function update_action(){
        $userId = $this->session->userIdAd;

        $notice_id = $this->request->getPost('notice_id');
        $data['title'] = $this->request->getPost('title');
        $data['description'] = $this->request->getPost('description');
        $data['updatedBy'] = $userId;

        $this->validation->setRules([
            'title' => ['label' => 'Title', 'rules' => 'required'],
            'description' => ['label' => 'Description', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Notice/update/'.$notice_id));
        } else {

            $table = DB()->table('notice');
            $table->where('notice_id',$notice_id)->update($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"> Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Admin/Notice/update/'.$notice_id));

        }
    }

    public function delete($id){

        $NoticesTab = DB()->table('notice');
        $NoticesTab->where('notice_id',$id)->delete();

        $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Delete successful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        return redirect()->to(site_url('Admin/Notice'));

    }






}