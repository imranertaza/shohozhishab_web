<?php

use App\Libraries\Permission;

function DB()
{
    $db = \Config\Database::connect();
    return $db;
}

function newSession()
{
    $session = \Config\Services::session();
    return $session;
}

function bdDateFormat($data = '0000-00-00') {
    return ($data == '0000-00-00') ? 'Unknown' : date('d/m/y', strtotime($data));
}

function globalDateTimeFormat($datetime = '0000-00-00 00:00:00') {

    if ($datetime == '0000-00-00 00:00:00' or $datetime == '0000-00-00' or $datetime == '') {
        return 'Unknown';
    }
    return date('h:i A d/m/y', strtotime($datetime));
}

function invoiceDateFormat($datetime = '0000-00-00 00:00:00') {

    if ($datetime == '0000-00-00 00:00:00' or $datetime == '0000-00-00' or $datetime == '') {
        return 'Unknown';
    }
//    return date('d M Y h:i A ', strtotime($datetime));
    return date('d M Y', strtotime($datetime));
}

function saleDate($datetime = '0000-00-00 00:00:00') {

    if ($datetime == '0000-00-00 00:00:00' or $datetime == '0000-00-00' or $datetime == '') {
        return 'Unknown';
    }

    $date = date('d/m/y', strtotime($datetime));
    $time = date('h:i a', strtotime($datetime));

    return $date . '<br/>' . $time;
}

function get_data_by_id($needCol, $table, $whereCol, $whereInfo)
{
    $table = DB()->table($table);

    $query = $table->where($whereCol,$whereInfo)->get();
    $findResult = $query->getRow();
    if (!empty($findResult)) {
        $col = ($findResult->$needCol == NULL) ? NULL: $findResult->$needCol;
    }else {
        $col = false;
    }
    return $col;
}

function showWithCurrencySymbol($money) {
//    $table = DB()->table('gen_settings');
//    $currency_before_symbol = $table->where('sch_id',$_SESSION['shopId'])->where('label','currency_before_symbol')->get()->getRow();
//    $currency_after_symbol = $table->where('sch_id',$_SESSION['shopId'])->where('label','currency_after_symbol')->get()->getRow();
//    $result = $currency_before_symbol->value." ".number_format($money, 2, '.', ',')." ".$currency_after_symbol->value;
//    return $result;
    return '৳ '.number_format($money, 2, '.', ',').' /-';
}

function statusView($selected = '1') {
    $status = [
        '0' => 'Inactive',
        '1' => 'Active',
    ];

    $row = '';
    foreach ($status as $key => $option) {
        $row .= ($selected == $key) ? $option : '';
    }
    return $row;
}

function globalStatus($selected = 'sel') {
    $status = [
        '1' => 'Active',
        '0' => 'Inactive',
    ];

    $row = '';
    foreach ($status as $key => $option) {
        $row .= '<option value="' . $key . '"';
        $row .= ($selected == $key) ? ' selected' : '';
        $row .= '>' . $option . '</option>';
    }
    return $row;
}

function get_package_other_db($selected = 'sel') {

    $db2 = \Config\Database::connect('custom');
    $newDb = $db2->database;
    DB()->query('use '.$newDb);
    $packageTable = $db2->table('package');
    $pack = $packageTable->get()->getResult();

    $row = '';
    foreach ($pack as $key => $option) {
        $row .= '<option value="' . $option->package_id . '"';
        $row .= ($selected == $option->package_id) ? ' selected' : '';
        $row .= '>' . $option->package_name . '</option>';
    }
    return $row;
}

function package_expiry($shop_id) {

    $db2 = \Config\Database::connect('custom');
    $newDb = $db2->database;
    $db2->query('use '.$newDb);

    $tab  = $db2->table('license');
    $pack = $tab->where('sch_id',$shop_id)->get()->getRow();

    $end_date = '';
    if (!empty($pack)){
        $end_date = $pack->end_date;
    }
    return $end_date;
}

function getListInOption($selected, $tblId, $needCol, $table)
{
    $table = DB()->table($table);
    $query = $table->get();
    $options = '';
    foreach ($query->getResult() as $value) {
        $options .= '<option value="' . $value->$tblId . '" ';
        $options .= ($value->$tblId == $selected ) ? ' selected="selected"' : '';
        $options .= '>' . $value->$needCol. '</option>';
    }
    return $options;
}

function custome_db_email_exists_check($email) {

    $db2 = \Config\Database::connect('custom');
    $newDb = $db2->database;
    $db2->query('use '.$newDb);

    $tab  = $db2->table('users');
    $email = $tab->where('email',$email)->countAllResults();


    if (empty($email)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function custome_db_email_exists_check_update($email,$shopId) {

    $db2 = \Config\Database::connect('custom');
    $newDb = $db2->database;
    $db2->query('use '.$newDb);

    $tab  = $db2->table('users');
    $email = $tab->where('email',$email)->where('sch_id !=',$shopId)->countAllResults();


    if (empty($email)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function shop_order_check_and_view($shop_id){
    $table = DB()->table('orders');
    $order = $table->where('shop_id', $shop_id)->where('status','Pending');
    $result = false;
    if (empty($order->countAllResults())){
        $result = true;
    }
    return $result;
}

function notice(){
    $table = DB()->table('notice');
    $result = $table->get()->getResult();

    return $result;
}

function title_by_value($title){
    $table = DB()->table('genarel_settings');
    $query = $table->where('title', $title)->get()->getLastRow();
    $result ='';
    if (!empty($query)){
        $result = $query->value;
    }
    return $result;
}

function check_free_pack_used(){
    $userId =  newSession()->user_id;
    $table = DB()->table('customers');
    $result = $table->where('customer_id',$userId)->get()->getRow();
    $data = true;
    if ($result->free_pack_used == '1'){
        $data = false;
    }
    return $data;
}
