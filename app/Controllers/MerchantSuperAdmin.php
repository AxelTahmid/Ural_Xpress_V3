<?php

namespace App\Controllers;

use App\Models\MerchantModel;

use App\Models\SuperFunctionsModel;


class MerchantSuperAdmin extends BaseController
{
    public function index()
    {
        $data = [];

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');
    }

    public function view_merchant()
    {
        $db = db_connect();
        $delivery_model = new SuperFunctionsModel($db);
        $data['all_merchant'] = $delivery_model->view_merchant();
        // $data = [
        //     'all_merchant' => $delivery_model->paginate(10),
        //     'pager' => $delivery_model->pager,
        // ];

        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        echo view('templates/header');
        echo view('merchant/manage_merchant', $data);
        echo view('templates/footer');
    }
}
