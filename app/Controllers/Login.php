<?php

namespace App\Controllers;

class Login extends BaseController
{
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function index()
    {

        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            $data['no_banner'] = 'on';
            echo view('Web/header',$data);
            echo view('Web/login');
            echo view('Web/footer');
        }else{
            return redirect()->to(site_url('Web/Dashboard'));
        }
    }

    public function action(){
        $this->validation->setRule('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->validation->setRule('password', 'Password', 'required|max_length[32]');

        if($this->validation->withRequest($this->request)->run() == FALSE){

            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">All field is required <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('/Login'));
        }else{

            $email = strtolower($this->request->getPost('email'));
            $password = $this->request->getPost('password');

            $result = $this->loginMe($email, $password);

            if(!empty($result)){

                // Remember me (Remembering the user email and password) Start
                if (!empty($this->request->getPost("remember"))) {
                    setcookie('login_email',$email,time()+ (86400 * 30), "/");
                    setcookie('login_password',$password,time() + (86400 * 30), "/");
                }else{
                    if (isset($_COOKIE['login_email'])) {
                        setcookie('login_email','', 0, "/");
                    }
                    if (isset($_COOKIE['login_password'])) {
                        setcookie('login_password','', 0, "/");
                    }
                }
                // Remember me (Remembering the user email and password) End



                $sessionArray = array('user_id'=>$result->customer_id,
                    'user_name'=>$result->name,
                    'allUser'=>$result,
                    'isLoggedInWeb' => TRUE
                );
                $this->session->set($sessionArray);

                return redirect()->to(site_url('Web/dashboard'));


            }else{
                $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">Your login detail not match <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                return redirect()->to(site_url('/Login'));
            }

        }
    }

    private function loginMe($email,$password){
        $table = DB()->table('customers');
        $user = $table->where('email',$email)->where('status','1')->get()->getRow();

        if(!empty($user)){
            if(SHA1($password) == $user->password){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    public function logout()
    {

        unset($_SESSION['customer_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['allUser']);
        unset($_SESSION['isLoggedInWeb']);

        return redirect()->to('/');
    }

    public function register(){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            $data['no_banner'] = 'on';

            echo view('Web/header', $data);
            echo view('Web/register');
            echo view('Web/footer');
        }else {
            return redirect()->to(site_url('/Web/Dashboard'));
        }
    }

    public function register_action(){
        $this->validation->setRule('name', 'Name', 'required|max_length[128]');
        $this->validation->setRule('phone', 'Phone', 'required|alpha_numeric|min_length[6]|max_length[12]');
        $this->validation->setRule('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->validation->setRule('password', 'Password', 'required|max_length[32]');
        $this->validation->setRule('con_password', 'Confirm Password', 'required|matches[password]|max_length[32]');

        if($this->validation->withRequest($this->request)->run() == FALSE){
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">'.$this->validation->listErrors().'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('/register'));
        }else{

            $data['email'] = strtolower($this->request->getPost('email'));
            $data['name'] = $this->request->getPost('name');
            $data['mobile'] = $this->request->getPost('phone');
            $data['password'] = SHA1($this->request->getPost('password'));
            $data['createdBy'] = '1';

            if ($this->checkDuplicate($data['email']) == true) {

                $table = DB()->table('customers');
                $table->insert($data);

                $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Successfully register <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                return redirect()->to(site_url('/register'));
            }else{
                $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">Already existing email account! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                return redirect()->to(site_url('/register'));
            }
        }
    }

    private function checkDuplicate($email){
        $table = DB()->table('customers');
        $user = $table->where('email',$email)->where('status','1')->countAllResults();

        if(empty($user)){
            return true;
        }else {
            return false;
        }
    }

}
