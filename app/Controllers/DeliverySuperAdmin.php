<?php

namespace App\Controllers;

use App\Models\DeliveryModel;

class DeliverySuperAdmin extends BaseController
{
    public function index()
    {
        $data = [];

        echo view('templates/header', $data);
        echo view('dashboard');
        echo view('templates/footer');
    }

    public function view_delivery()
    {
        $delivery_model = new DeliveryModel();
        $query = $delivery_model->get()->getResult();
        echo '<pre>';
        print_r($query);
        echo '<pre>';
    }
}
