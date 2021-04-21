<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;


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
        $db = db_connect();
        $super_model = new SuperFunctionsModel($db);
        $data['all_delivery'] = $super_model->view_delivery();
        echo view('templates/header', $data);
        echo view('delivery/manage_delivery');
        echo view('templates/footer');
    }
}
