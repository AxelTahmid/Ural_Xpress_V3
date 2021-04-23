<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;
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

    public function add_merchant()
    {

        if ($this->request->getMethod() == 'post') {
            $db = db_connect();
            $merchant_super_model = new SuperFunctionsModel($db);
            $data = [
                'merchant_id' => " ",
                'merchant_img' => $this->request->getVar('image_url'),
                'merchant_name' => $this->request->getVar('mer_name'),
                'merchant_phone' => $this->request->getVar('mer_phone'),
                'merchant_email' => $this->request->getVar('mer_email'),
                'merchant_business_name' => $this->request->getVar('business_name'),
                'merchant_business_type' => $this->request->getVar('business_type'),
                'merchant_pickup_address' => $this->request->getVar('pickup_add'),
                'merchant_pickup_area' => $this->request->getVar('pickup_area'),
            ];
            $merchant_super_model->add_merchant($data);
            return redirect()->to('/view_merchant');
        } else {
            echo view('templates/header');
            echo view('merchant/add_merchant_form');
            echo view('templates/footer');
        }
    }

    public function view_merchant()
    {
        $db = db_connect();
        $merchant_super_model = new SuperFunctionsModel($db);
        $data['all_merchant'] = $merchant_super_model->get_all_merchant();
        echo view('templates/header');
        echo view('merchant/manage_merchant', $data);
        echo view('templates/footer');
    }

    public function delete_merchant($id)
    {
        $db = db_connect();
        $merchant_super_model = new SuperFunctionsModel($db);
        $merchant_super_model->delete_merchant_by_id($id);
        return redirect()->to('/view_merchant');
    }
}
