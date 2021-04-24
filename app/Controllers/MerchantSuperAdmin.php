<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;

class MerchantSuperAdmin extends BaseController
{
    function __construct()
    {
    }
    public function add_merchant()
    {

        if ($this->request->getMethod() == 'post') {
            $db = db_connect();
            $merchant_super_model = new SuperFunctionsModel($db);

            $file = $this->request->getFile('image_url');
            if ($file->isValid() && !$file->hasMoved()) {
                $imgName = $file->getRandomName();
                $file->move('uploads/', $imgName);
            }

            $data = [
                'merchant_img' => $imgName,
                'merchant_name' => $this->request->getVar('mer_name'),
                'merchant_phone' => $this->request->getVar('mer_phone'),
                'merchant_email' => $this->request->getVar('mer_email'),
                'merchant_business_name' => $this->request->getVar('business_name'),
                'merchant_business_type' => $this->request->getVar('business_type'),
                'merchant_pickup_address' => $this->request->getVar('pickup_add'),
                'merchant_pickup_area' => $this->request->getVar('pickup_area'),
            ];
            $merchant_super_model->add_merchant($data);
            return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Added Successfully~');
        } else {
            echo view('templates/header');
            echo view('merchant/add_merchant_form');
            echo view('templates/footer');
        }
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    }

    public function edit_merchant($id)
    {
        $db = db_connect();
        $merchant_super_model = new SuperFunctionsModel($db);
        $data = $merchant_super_model->get_merchant_by_id($id);

        if ($this->request->getMethod() == 'post') {

            $old_imgName = $data->merchant_img;
            $file = $this->request->getFile('image_url');
            if ($file->isValid() && !$file->hasMoved()) {
                if (file_exists("uploads/" . $old_imgName)) {
                    unlink("uploads/" . $old_imgName);
                }
                $imgName = $file->getRandomName();
                $file->move('uploads/', $imgName);
            } else {
                $imgName = $old_imgName;
            }

            $data = [
                'merchant_img' => $imgName,
                'merchant_name' => $this->request->getVar('mer_name'),
                'merchant_phone' => $this->request->getVar('mer_phone'),
                'merchant_email' => $this->request->getVar('mer_email'),
                'merchant_business_name' => $this->request->getVar('business_name'),
                'merchant_business_type' => $this->request->getVar('business_type'),
                'merchant_pickup_address' => $this->request->getVar('pickup_add'),
                'merchant_pickup_area' => $this->request->getVar('pickup_area'),
            ];
            $merchant_super_model->update_merchant_by_id($id, $data);
            return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Updated Successfully~');
        } else {
            $found_data['find_merchant'] = $merchant_super_model->get_merchant_by_id($id);
            echo view('templates/header');
            echo view('merchant/edit_merchant_form', $found_data);
            echo view('templates/footer');
        }
    }

    public function delete_merchant($id)
    {
        $db = db_connect();
        $merchant_super_model = new SuperFunctionsModel($db);

        $data = $merchant_super_model->get_merchant_by_id($id);
        $imgName = $data->merchant_img;

        if (file_exists("uploads/" . $imgName)) {
            unlink("uploads/" . $imgName);
        } else {
        }
        $merchant_super_model->delete_merchant_by_id($id);
        return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Record and Photo Deleted Successfully~');
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
}
