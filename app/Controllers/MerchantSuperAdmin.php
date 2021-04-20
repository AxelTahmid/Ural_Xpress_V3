<?php

namespace App\Controllers;

use App\Models\MerchantModel;

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
        $delivery_model = new MerchantModel();
        $data['all_merchant'] = $delivery_model->get()->getResult();
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
