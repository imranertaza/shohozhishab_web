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
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $table = DB()->table('orders');
            $data['orders'] = $table->get()->getResult();

            //status change when expiry date over (start)
            foreach ($data['orders'] as $val){
                $s_shop_id = get_data_by_id('shohozHishab_shop_id','shops','shop_id',$val->shop_id);
                $end_date = package_expiry($s_shop_id);
                if (date('Y-m-d') > $end_date){
                    $upData['status'] = 'Inactive';
                    $table = DB()->table('orders');
                    $table->where('order_id',$val->order_id)->update($upData);
                }
            }
            //status change when expiry date over (end)

            $data['menu_select'] = 'my_package';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $table = DB()->table('invoice');
            $data['invoice'] = $table->get()->getResult();

            $data['menu_select'] = 'my_bill';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
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
            $table = DB()->table('customers');
            $data['pro'] = $table->where('customer_id',$userId)->get()->getRow();
            $data['menu_select'] = 'profile';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
            echo view('Web/profile',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function password_update(){

        $userId = $this->session->user_id;
        $data['customer_id'] = $this->request->getPost('customer_id');
        $data['password'] = SHA1($this->request->getPost('password'));
        $data['con_password'] = SHA1($this->request->getPost('con_password'));

        $this->validation->setRules([
            'password' => ['label' => 'Password', 'rules' => 'required'],
            'con_password' => ['label' => 'Con password', 'rules' => 'matches[password]'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/profile'));
        }else {

            $table = DB()->table('customers');
            $table->where('customer_id', $data['customer_id'])->update($data);



            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/profile'));
        }
    }

    public function shop_create(){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {
            $table = DB()->table('shops');
            $data['shops'] = $table->get()->getResult();

            $data['menu_select'] = 'shop_create';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar',$data);
            echo view('Web/shop_create',$data);
            echo view('Web/footer_dashboard');
        }
    }

    public function shop_create_action(){
        $data['shopName'] = $this->request->getPost('shopName');
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        $data['createdBy'] = '1';

        $this->validation->setRules([
            'shopName' => ['label' => 'Shop Name', 'rules' => 'required'],
            'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
            'password' => ['label' => 'Password', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/shop_create'));
        }else {

            $table = DB()->table('shops');
            $table->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Add successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/shop_create'));
        }
    }

    public function shop_edit_data(){
        $response = array();

        $id = $this->request->getPost('shopId');
        $table = DB()->table('shops');
        $data = $table->where('shop_id' ,$id)->get()->getRow();

        return $this->response->setJSON($data);


    }

    public function shop_update_action(){
        $data['shop_id'] = $this->request->getPost('shop_id');
        $data['shopName'] = $this->request->getPost('shopName');
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        $data['status'] = $this->request->getPost('status');
        $data['updatedBy'] = '1';

        $this->validation->setRules([
            'shopName' => ['label' => 'Shop Name', 'rules' => 'required'],
            'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
            'password' => ['label' => 'Password', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/shop_create'));
        }else {

            $table = DB()->table('shops');
            $table->where('shop_id',$data['shop_id'])->update($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Update successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/shop_create'));
        }
    }

    public function get_started($package_id){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {
            $table = DB()->table('shops');
            $data['shops'] = $table->get()->getResult();

            $tablePack = DB()->table('packages');
            $data['pack'] = $tablePack->where('package_id', $package_id)->get()->getRow();

            $data['menu_select'] = 'user_guide';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar', $data);
            echo view('Web/get_package', $data);
            echo view('Web/footer_dashboard');
        }
    }

    public function ajax_shop_action(){
        $package_id = $this->request->getPost('package_id');
        $data['shopName'] = $this->request->getPost('shopName');
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        $data['createdBy'] = '1';

        $this->validation->setRules([
            'shopName' => ['label' => 'Shop Name', 'rules' => 'required'],
            'email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
            'password' => ['label' => 'Password', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/get_started/'.$package_id));
        }else {

            $table = DB()->table('shops');
            $table->insert($data);

            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Add successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/get_started/'.$package_id));
        }
    }

    public function package_action(){

        $data['reg_user_id'] = $this->session->user_id;
        $data['shop_id'] = $this->request->getPost('shop_id');
        $data['package_id'] = $this->request->getPost('package_id');
        $data['status'] = 'Active';
        $data['createdBy'] = '1';

        $this->validation->setRules([
            'shop_id' => ['label' => 'Shop', 'rules' => 'required'],
            'package_id' => ['label' => 'package', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/get_started/'.$data['package_id']));
        }else {

            DB()->transStart();

            $orderTable = DB()->table('orders');
            $orderTable->insert($data);
            $order_id = DB()->insertID();

            //invoice create
            $pacPrice = get_data_by_id('price','packages','package_id',$data['package_id']);
            $pacInstla = get_data_by_id('installation_fee','packages','package_id',$data['package_id']);
            $invData['order_id'] = $order_id;
            $invData['package_id'] = $data['package_id'];
            $invData['amount_original'] = $pacPrice + $pacInstla;
            $invData['payment_method_id'] = 0;
            $invData['aam_service_charge'] = 0;
            $invData['store_amount'] = 0;
            $invData['pay_status'] = 'Paid';
            $invData['aam_txnid'] = 0;
            $invData['mer_txnid'] = 0;
            $invData['createdBy'] = 1;
            $invTable = DB()->table('invoice');
            $invTable->insert($invData);


            $shWebTable = DB()->table('shops');
            $shopDetail = $shWebTable->where('shop_id',$data['shop_id'])->get()->getRow();

            $softPackId = get_data_by_id('software_pack_id','packages','package_id',$data['package_id']);

            $db2 = \Config\Database::connect('custom');
            $newDb = $db2->database;
            DB()->query('use '.$newDb);

            //shop create query
            $shopData['name'] = $shopDetail->shopName;
            $shopData['email'] = $shopDetail->email;
            $shopData['package_id'] = $softPackId;
            $shopData['status'] = '1';


            $shopTable = $db2->table('shops');
            $shopTable->insert($shopData);
            $shopsId = $db2->insertID();
            //shop create query

            //roles insert in roles table(start)
            $packageTable = $db2->table('package');
            $pack = $packageTable->where('package_id',$softPackId)->get()->getRow();
            $packPermission = (!empty($pack))?$pack->package_admin_permission:'{}';

            $role['sch_id'] = $shopsId;
            $role['role'] = 'Admin';
            $role['is_default'] = '1';
            $role['permission'] = $packPermission;
            $role['createdBy'] = $this->session->user_id;
            $role['createdDtm'] = date('Y-m-d h:i:s');

            $rolesTable = $db2->table('roles');
            $rolesTable->insert($role);
            $roleId = $db2->insertID();
            //roles insert in roles table(start)


            //create users in users table (start)
            $userData['sch_id'] = $shopsId;
            $userData['role_id'] = $roleId;
            $userData['is_default'] = 1;
            $userData['name'] = $shopDetail->shopName;
            $userData['email'] = $shopDetail->email;
            $userData['password'] = sha1($shopDetail->password);
            $userData['status'] = '1';
            $userData['createdBy'] = $this->session->user_id;
            $userData['createdDtm'] = date('Y-m-d h:i:s');

            $usersTable = $db2->table('users');
            $usersTable->insert($userData);
            //create users in users table (end)



            //create Vat in vat_register table (start)
            $vatData['sch_id'] = $shopsId;
            $vatData['is_default'] = 1;
            $vatData['name'] = "Default Vat Name";
            $vatData['vat_register_no'] = "BIN-0000-01";
            $vatData['createdBy'] = $this->session->user_id;
            $vatData['createdDtm'] = date('Y-m-d h:i:s');

            $vatTable = $db2->table('vat_register');
            $vatTable->insert($vatData);
            //create Vat in vat_register table (end)



            // create default store in stores table(start)
            $storeData['sch_id'] = $shopsId;
            $storeData['name'] = 'Default';
            $storeData['description'] = 'Default Store';
            $storeData['is_default'] = '1';
            $storeData['createdDtm'] = date('Y-m-d h:i:s');

            $storeTable = $db2->table('stores');
            $storeTable->insert($storeData);
            // create default store in stores table(end)


            //general settings insert in gen_settings table (start)
            $gen_settingsData = array(
                array('sch_id' => $shopsId,'label' => 'barcode_img_size','value' => '100'
                ),
                array('sch_id' => $shopsId,'label' => 'barcode_type','value' => 'C128A'
                ),
                array('sch_id' => $shopsId,'label' => 'business_type','value' => 'Ownership business'
                ),
                array('sch_id' => $shopsId,'label' => 'currency','value' => 'BDT'
                ),
                array('sch_id' => $shopsId,'label' => 'currency_before_symbol','value' => '৳'
                ),
                array('sch_id' => $shopsId,'label' => 'currency_after_symbol','value' => '/-'
                ),
                array('sch_id' => $shopsId,'label' => 'running_year','value' => '2023-2024'
                ),
                array('sch_id' => $shopsId,'label' => 'disable_frontend','value' => '0'
                ),
                array('sch_id' => $shopsId,'label' => 'phone_code','value' => '880'
                ),
                array('sch_id' => $shopsId,'label' => 'country','value' => 'Bangladesh'
                ),

            );
            $gen_settingsTable = $db2->table('gen_settings');
            $gen_settingsTable->insertBatch($gen_settingsData);
            //general settings insert in gen_settings table (end)

            //customer type create(start)
            $cusTypeData = array(
                'sch_id' => $shopsId,
                'type_name' => 'regular',
                'createdBy' => $shopsId,
                'createdDtm' => date('Y-m-d h:i:s')
            );
            $customer_typeTable = $db2->table('customer_type');
            $customer_typeTable->insert($cusTypeData);
            //customer type create(end)


            $endDate = date('Y-m-d',strtotime('+30 days',strtotime(str_replace('/', '-', date("Y-m-d")))));
            $licKey = uniqid();
            $licData['sch_id'] = $shopsId;
            $licData['start_date'] =  date("Y-m-d");
            $licData['end_date'] = $endDate;
            $licData['lic_key'] = $licKey;

            $licenseTable = $db2->table('license');
            $licenseTable->insert($licData);

            $shopStData['status'] = '1';
            $shopTable = $db2->table('shops');
            $shopTable->where('sch_id',$shopsId)->update($shopStData);

            $usershData = ['status' => 1];
            $tabUs = $db2->table('users');
            $tabUs->where('sch_id',$shopsId)->where('is_default','1')->update($usershData);

            $oldDb = DB()->database;
            DB()->query('use '.$oldDb);



            $shopDataId['shohozHishab_shop_id'] = $shopsId;
            $shWebTable = DB()->table('shops');
            $shWebTable->where('shop_id',$data['shop_id'])->update($shopDataId);

            DB()->transComplete();



            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Payment successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/get_started/'.$data['package_id']));
        }
    }

    public function re_new($orderId){
        $isLoggedInWeb = $this->session->isLoggedInWeb;
        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {
            return redirect()->to(site_url('/Login'));
        }else {

            $table = DB()->table('orders');
            $data['orders'] = $table->where('order_id', $orderId)->get()->getRow();

            $tablePack = DB()->table('packages');
            $data['pack'] = $tablePack->where('package_id', $data['orders']->package_id)->get()->getRow();

            $data['menu_select'] = 'my_package';
            $data['top_mer'] = view('Web/da_top_btn');
            echo view('Web/header_dashboard');
            echo view('Web/sidebar', $data);
            echo view('Web/get_package_renue', $data);
            echo view('Web/footer_dashboard');
        }
    }

    public function pack_data(){
        $package_id = $this->request->getPost('package_id');
        $tablePack = DB()->table('packages');
        $pack = $tablePack->where('package_id', $package_id)->get()->getRow();
        $view = '<div class="d-flex justify-content-between">
                    <p>Monthly fee</p>
                    <p>'.$pack->price.'tk</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Total </p>
                    <p>'.round( $pack->price).'tk</p>
                </div>';
        print $view;
    }

    public function package_renew_action(){
        $order_id = $this->request->getPost('order_id');
        $data['shop_id'] = $this->request->getPost('shop_id');
        $data['package_id'] = $this->request->getPost('package_id');
        $data['status'] = 'Active';

        $this->validation->setRules([
            'shop_id' => ['label' => 'Shop', 'rules' => 'required'],
            'package_id' => ['label' => 'package', 'rules' => 'required'],
        ]);

        if ($this->validation->run($data) == FALSE) {
            $this->session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">' . $this->validation->listErrors() . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/re_new/'.$order_id));
        }else {

            DB()->transStart();
            $orderData = ['status' => 'Active','package_id' => $data['package_id']];
            $tabOrder = DB()->table('orders');
            $tabOrder->where('order_id',$order_id)->update($orderData);

            //invoice create
            $pacPrice = get_data_by_id('price','packages','package_id',$data['package_id']);
            $invData['order_id'] = $order_id;
            $invData['package_id'] = $data['package_id'];
            $invData['amount_original'] = $pacPrice;
            $invData['payment_method_id'] = 0;
            $invData['aam_service_charge'] = 0;
            $invData['store_amount'] = 0;
            $invData['pay_status'] = 'Paid';
            $invData['aam_txnid'] = 0;
            $invData['mer_txnid'] = 0;
            $invData['createdBy'] = 1;
            $invTable = DB()->table('invoice');
            $invTable->insert($invData);

            $softPackId = get_data_by_id('software_pack_id','packages','package_id',$data['package_id']);
            $shopId = get_data_by_id('shohozHishab_shop_id','shops','shop_id',$data['shop_id']);


            $db2 = \Config\Database::connect('custom');
            $newDb = $db2->database;
            DB()->query('use '.$newDb);


            $packageTable = $db2->table('package');
            $pack = $packageTable->where('package_id',$softPackId)->get()->getRow();
            $packPermission = (!empty($pack))?$pack->package_admin_permission:'{}';
            $role['permission'] = $packPermission;

            $rolesTable = $db2->table('roles');
            $rolesTable->where('sch_id',$shopId)->where('is_default' , '1')->update($role);



            $endDate = date('Y-m-d',strtotime('+30 days',strtotime(str_replace('/', '-', date("Y-m-d")))));
            $licData['start_date'] =  date("Y-m-d");
            $licData['end_date'] = $endDate;

            $licenseTable = $db2->table('license');
            $licenseTable->where('sch_id',$shopId)->update($licData);

            $shopStData['status'] = '1';
            $shopStData['package_id'] = $softPackId;
            $shopTable = $db2->table('shops');
            $shopTable->where('sch_id',$shopId)->update($shopStData);

            $usershData = ['status' => '1'];
            $tabUs = $db2->table('users');
            $tabUs->where('sch_id',$shopId)->where('is_default','1')->update($usershData);


            DB()->transComplete();


            $this->session->setFlashdata('message', '<div class="alert alert-success alert-dismissible" role="alert" >Payment successful <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            return redirect()->to(site_url('Web/Dashboard/my_package'));
        }
    }


}