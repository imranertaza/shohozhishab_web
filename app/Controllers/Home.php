<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $validation;
    protected $session;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $data['headerOn'] = 'on';
        $table = DB()->table('packages');
        $data['pack'] = $table->get()->getResult();
        echo view('Web/header',$data);
        echo view('Web/index',$data);
        echo view('Web/footer');
    }

    public function detail(){
        $data['no_banner'] = 'on';
        $table = DB()->table('packages');
        $data['pack'] = $table->get()->getResult();
        echo view('Web/header',$data);
        echo view('Web/detail',$data);
        echo view('Web/footer');
    }

    public function detail_mob($packId){

        $data['no_banner'] = 'on';
        $table = DB()->table('packages');
        $data['package'] = $table->get()->getResult();

        $packtable = DB()->table('packages');
        $data['pack'] = $packtable->where('package_id',$packId)->get()->getRow();

        echo view('Web/header',$data);
        echo view('Web/detail_mob',$data);
        echo view('Web/footer');
    }

    public function get_started($id){
        $data['no_banner'] = 'on';
        $table = DB()->table('packages');
        $data['pack'] = $table->where('package_id',$id)->get()->getRow();

        $paymentTab = DB()->table('payment_method');
        $payment = $paymentTab->where('payment_method_id','1')->get()->getRow();
        $data['charge'] = $payment;

        echo view('Web/header',$data);
        echo view('Web/get_started',$data);
        echo view('Web/footer');
    }

    public function action(){

//        $data['first_name'] = $this->request->getPost('first_name');
//        $data['last_name'] = $this->request->getPost('last_name');
//        $data['phone'] = $this->request->getPost('phone');
//        $data['email'] = $this->request->getPost('email');
//        $data['city'] = $this->request->getPost('city');
//        $data['postcode'] = $this->request->getPost('postcode');
//        $data['address'] = $this->request->getPost('address');
        $data['package_id'] = $this->request->getPost('package_id');
        $data['payment_method_id'] = $this->request->getPost('payment_method_id');
        $data['createdBy'] = '1';



        //package data get by package_id (start)
        $table = DB()->table('packages');
        $pack = $table->where('package_id',$data['package_id'])->get()->getRow();
        $data['price'] = $pack->price;
        //package data get by package_id (end)



        //charge calculation (start)
        $paymentTab = DB()->table('payment_method');
        $payment = $paymentTab->where('payment_method_id',$data['payment_method_id'])->get()->getRow();
        $data['charge'] = round(($pack->price * $payment->charge)/100);
        $data['total'] = $pack->price + $data['charge'];
        //charge calculation (end)


        //payment detail (start)
        if($data['payment_method_id'] == 1){ $data['payment_phone'] = $this->request->getPost('roket_phone'); $data['payment_transaction_id'] = $this->request->getPost('roket_id'); }
        if($data['payment_method_id'] == 2){ $data['payment_phone'] = $this->request->getPost('bkash_phone'); $data['payment_transaction_id'] = $this->request->getPost('bkash_id'); }
        if($data['payment_method_id'] == 3){ $data['payment_phone'] = $this->request->getPost('nagad_phone'); $data['payment_transaction_id'] = $this->request->getPost('nagad_id'); }
        //payment detail (end)


        $this->validation->setRules([
            'payment_phone' => ['label' => 'Payment Phone', 'rules' => 'required'],
            'payment_transaction_id' => ['label' => 'Payment Transaction Id', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">'. $this->validation->listErrors() .'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Home/get_started/' . $data['package_id']));
        }else {
            $billingTab = DB()->table('billing');
            $billingTab->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">Successfully placed your order <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Home/get_started/' . $data['package_id']));
        }
    }

    public function charge(){
        $pay_id = $this->request->getPost('pay_id');
        $price = $this->request->getPost('price');

        $paymentTab = DB()->table('payment_method');
        $payment = $paymentTab->where('payment_method_id',$pay_id)->get()->getRow();
        $packCharge = round(($price*$payment->charge)/100);

        $total = $price + $packCharge;

        $data['charge'] = $packCharge;
        $data['totalPrice'] = $total;
        return $this->response->setJSON($data);
    }


    public function subscribe(){
        $email = $this->request->getPost('email');

        if (!empty($email)){
            $data['email'] = $email;
            $data['createdBy'] = '1';
            $subscribeTab = DB()->table('subscribe');
            $subscribeTab->insert($data);
            print true;
        }else{
            print false;
        }

    }


}
