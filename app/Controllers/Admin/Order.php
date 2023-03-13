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

    public function orderStatusChenge(){
        $status = $this->request->getPost('status');
        $orderId = $this->request->getPost('orderId');
        if ($status == 'Active'){
            $shopwebID = get_data_by_id('shop_id','orders','order_id',$orderId);
            $detail = get_data_by_id('detail','orders','order_id',$orderId);
            $shopId = get_data_by_id('shohozHishab_shop_id','shops','shop_id',$shopwebID);

            if ($detail == 'purchase_package') {
                $shWebTable = DB()->table('shops');
                $shopDetail = $shWebTable->where('shop_id', $shopwebID)->get()->getRow();
                $is_exists_email = custome_db_email_exists_check($shopDetail->email);
                if ($is_exists_email == true) {
                    DB()->transStart();
                    $data['status'] = $status;
                    $table = DB()->table('orders');
                    $table->where('order_id', $orderId)->update($data);

                    $invData['pay_status'] = 'Paid';
                    $table = DB()->table('invoice');
                    $table->where('order_id', $orderId)->update($invData);


                    $shopwebID = get_data_by_id('shop_id', 'orders', 'order_id', $orderId);
                    $packageId = get_data_by_id('package_id', 'orders', 'order_id', $orderId);
                    $softPackId = get_data_by_id('software_pack_id', 'packages', 'package_id', $packageId);


                    $db2 = \Config\Database::connect('custom');
                    $newDb = $db2->database;
                    DB()->query('use ' . $newDb);

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
                    $pack = $packageTable->where('package_id', $softPackId)->get()->getRow();
                    $packPermission = (!empty($pack)) ? $pack->package_admin_permission : '{}';

                    $role['sch_id'] = $shopsId;
                    $role['role'] = 'Admin';
                    $role['is_default'] = '1';
                    $role['permission'] = $packPermission;
                    $role['createdBy'] = $this->session->userIdAd;
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
                    $userData['createdBy'] = $this->session->userIdAd;
                    $userData['createdDtm'] = date('Y-m-d h:i:s');

                    $usersTable = $db2->table('users');
                    $usersTable->insert($userData);
                    //create users in users table (end)


                    //create Vat in vat_register table (start)
                    $vatData['sch_id'] = $shopsId;
                    $vatData['is_default'] = 1;
                    $vatData['name'] = "Default Vat Name";
                    $vatData['vat_register_no'] = "BIN-0000-01";
                    $vatData['createdBy'] = $this->session->userIdAd;
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
                        array('sch_id' => $shopsId, 'label' => 'barcode_img_size', 'value' => '100'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'barcode_type', 'value' => 'C128A'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'business_type', 'value' => 'Ownership business'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'currency', 'value' => 'BDT'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'currency_before_symbol', 'value' => '৳'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'currency_after_symbol', 'value' => '/-'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'running_year', 'value' => '2023-2024'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'disable_frontend', 'value' => '0'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'phone_code', 'value' => '880'
                        ),
                        array('sch_id' => $shopsId, 'label' => 'country', 'value' => 'Bangladesh'
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


                    $endDate = date('Y-m-d', strtotime('+30 days', strtotime(str_replace('/', '-', date("Y-m-d")))));
                    $licKey = uniqid();
                    $licData['sch_id'] = $shopsId;
                    $licData['start_date'] = date("Y-m-d");
                    $licData['end_date'] = $endDate;
                    $licData['lic_key'] = $licKey;

                    $licenseTable = $db2->table('license');
                    $licenseTable->insert($licData);

                    $shopStData['status'] = '1';
                    $shopTable = $db2->table('shops');
                    $shopTable->where('sch_id', $shopsId)->update($shopStData);

                    $usershData = ['status' => 1];
                    $tabUs = $db2->table('users');
                    $tabUs->where('sch_id', $shopsId)->where('is_default', '1')->update($usershData);

                    $oldDb = DB()->database;
                    DB()->query('use ' . $oldDb);


                    $shopDataId['shohozHishab_shop_id'] = $shopsId;
                    $shopDataId['package_id'] = $packageId;
                    $shWebTable = DB()->table('shops');
                    $shWebTable->where('shop_id', $shopwebID)->update($shopDataId);

                    DB()->transComplete();
                    print true;
                }else{
                    print false;
                }

            }

            if ($detail == 'renew_package'){
                DB()->transStart();
                $data['status'] = $status;
                $table = DB()->table('orders');
                $table->where('order_id', $orderId)->update($data);

                $invData['pay_status'] = 'Paid';
                $table = DB()->table('invoice');
                $table->where('order_id', $orderId)->update($invData);

                $webData['status'] = '1';

                $webShopTable = DB()->table('shops');
                $webShopTable->where('shop_id',$shopwebID)->update($webData);

                $db2 = \Config\Database::connect('custom');
                $newDb = $db2->database;
                DB()->query('use ' . $newDb);

                $endDate = date('Y-m-d', strtotime('+30 days', strtotime(str_replace('/', '-', date("Y-m-d")))));
                $licData['start_date'] = date("Y-m-d");
                $licData['end_date'] = $endDate;

                $licenseTable = $db2->table('license');
                $licenseTable->where('sch_id', $shopId)->update($licData);

                $shopStData['status'] = '1';
                $shopTable = $db2->table('shops');
                $shopTable->where('sch_id', $shopId)->update($shopStData);

                $usershData = ['status' => '1'];
                $tabUs = $db2->table('users');
                $tabUs->where('sch_id', $shopId)->where('is_default', '1')->update($usershData);
                DB()->transComplete();
                print true;
            }

            if ($detail == 'change_package'){
                DB()->transStart();
                $packageId = get_data_by_id('package_id', 'orders', 'order_id', $orderId);
                $softPackId = get_data_by_id('software_pack_id', 'packages', 'package_id', $packageId);

                $data['status'] = $status;
                $table = DB()->table('orders');
                $table->where('order_id', $orderId)->update($data);

                $invData['pay_status'] = 'Paid';
                $table = DB()->table('invoice');
                $table->where('order_id', $orderId)->update($invData);

                $webData['package_id'] = $packageId;
                $webData['status'] = '1';

                $webShopTable = DB()->table('shops');
                $webShopTable->where('shop_id',$shopwebID)->update($webData);


                $db2 = \Config\Database::connect('custom');
                $newDb = $db2->database;
                DB()->query('use ' . $newDb);

                $endDate = date('Y-m-d', strtotime('+30 days', strtotime(str_replace('/', '-', date("Y-m-d")))));
                $licData['start_date'] = date("Y-m-d");
                $licData['end_date'] = $endDate;

                $licenseTable = $db2->table('license');
                $licenseTable->where('sch_id', $shopId)->update($licData);

                $packageTable = $db2->table('package');
                $pack = $packageTable->where('package_id', $softPackId)->get()->getRow();
                $packPermission = (!empty($pack)) ? $pack->package_admin_permission : '{}';

                $role['permission'] = $packPermission;

                $rolesTable = $db2->table('roles');
                $rolesTable->where('sch_id', $shopId)->where('is_default', '1')->update($role);


                $shopStData['status'] = '1';
                $shopStData['package_id'] = $softPackId;
                $shopTable = $db2->table('shops');
                $shopTable->where('sch_id', $shopId)->update($shopStData);

                $usershData = ['status' => '1'];
                $tabUs = $db2->table('users');
                $tabUs->where('sch_id', $shopId)->where('is_default', '1')->update($usershData);
                DB()->transComplete();

                print true;
            }


        }else {
            $data['status'] = $status;
            $table = DB()->table('orders');
            $table->where('order_id', $orderId)->update($data);
            print true;
        }
    }







}