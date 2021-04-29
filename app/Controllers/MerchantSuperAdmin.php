<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;
use monken\TablesIgniter;

class MerchantSuperAdmin extends BaseController
{
    public function view_merchant()
    {
        echo view('templates/header');
        echo view('merchant/manage_merchant');
        echo view('templates/footer');
    }

    //merchants route
    public function fetch_merchant()
    {
        $db = db_connect();
        $merchant_super_model = new SuperFunctionsModel($db);
        $mer_data_table = new TablesIgniter();
        $mer_data_table->setTable($merchant_super_model->fetch_all_merchant())
            ->setDefaultOrder('merchant_id', 'ASC')
            ->setSearch([
                'merchant_id',
                'merchant_name',
                'merchant_phone',
                'merchant_email',
                'merchant_business_name'
            ])
            ->setOrder([
                'merchant_id', 'merchant_name',
                'merchant_phone', 'merchant_email', 'merchant_business_name',
                'merchant_business_type', 'merchant_pickup_address',
                'merchant_pickup_area'
            ])
            ->setOutput([
                'merchant_id', 'merchant_img', 'merchant_name',
                'merchant_phone', 'merchant_email', 'merchant_business_name',
                'merchant_business_type', 'merchant_pickup_address',
                'merchant_pickup_area', $merchant_super_model->mer_action_button()
            ]);

        return $mer_data_table->getDatatable();
    }

    public function action_merchant()
    {

        if ($this->request->getVar('action')) {
            helper(['form', 'uri']);
            $mer_name_err = '';
            $mer_phone_err = '';
            $business_name_err = '';
            $business_type_err = '';
            $pickup_add_err = '';
            $pickup_area_err = '';
            $mer_email_err = '';
            $image_url_err = '';
            $error = 'no';
            $err_message = '';
            $success = 'no';

            $error = $this->validate([
                'mer_name' => 'required|min_length[3]',
                'mer_phone' => 'required|min_length[11]',
                'mer_email' => 'required|valid_email',
                'business_name' => 'required|min_length[3]',
                'business_type' => 'required|min_length[3]',
                'pickup_add' => 'required',
                'pickup_area' => 'required',
                'image_url' => [
                    'uploaded[image_url]',
                    'mime_in[image_url,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[image_url,1024]'
                ]
            ]);
            if (!$error) {
                $error = 'yes';

                $validation = \Config\Services::validation();
                if ($validation->getError('mer_name')) {
                    $mer_name_err = $validation->getError('mer_name');
                }
                if ($validation->getError('mer_phone')) {
                    $mer_phone_err = $validation->getError('mer_phone');
                }
                if ($validation->getError('mer_email')) {
                    $mer_email_err = $validation->getError('mer_email');
                }
                if ($validation->getError('business_name')) {
                    $business_name_err = $validation->getError('business_name');
                }
                if ($validation->getError('business_type')) {
                    $business_type_err = $validation->getError('business_type');
                }
                if ($validation->getError('pickup_add')) {
                    $pickup_add_err = $validation->getError('pickup_add');
                }
                if ($validation->getError('pickup_area')) {
                    $pickup_area_err = $validation->getError('pickup_area');
                }
                if ($validation->getError('image_url')) {
                    $image_url_err = $validation->getError('image_url');
                }
            } else {
                $success = 'yes';
                if ($this->request->getVar('action') == 'Add') {
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

                    $err_message = '<div class="alert alert-success">Merchant Added Sucessfully!</div>';
                }
                if ($this->request->getVar('action') == 'Edit') {
                    $db = db_connect();
                    $merchant_super_model = new SuperFunctionsModel($db);
                    $id = $this->request->getVar('hidden_id');

                    $old_data = $merchant_super_model->get_merchant_by_id($id);
                    $old_imgName = $old_data->merchant_img;
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
                    $err_message = '<div class="alert alert-success">Merchant Updated Sucessfully!</div>';
                }
            }
            $output = array(
                'mer_name_err' => $mer_name_err,
                'mer_phone_err' => $mer_phone_err,
                'business_name_err' => $business_name_err,
                'business_type_err' => $business_type_err,
                'pickup_add_err' => $pickup_add_err,
                'pickup_area_err' => $pickup_area_err,
                'mer_email_err' => $mer_email_err,
                'image_url_err' => $image_url_err,
                'error' => $error,
                'success' => $success,
                'err_message' => $err_message
            );
            return json_encode($output);
        };
    }
    public function fetch_merchant_by_id()
    {
        if ($this->request->getVar('id')) {
            $db = db_connect();
            $merchant_super_model = new SuperFunctionsModel($db);
            $merchant_data = $merchant_super_model->get_merchant_by_id($this->request->getVar('id'));
            return json_encode($merchant_data);
        }
    }
    public function del_merchant_by_id()
    {
        if ($this->request->getVar('id')) {
            $id = $this->request->getVar('id');
            $db = db_connect();
            $merchant_super_model = new SuperFunctionsModel($db);
            $merchant_super_model->delete_merchant_by_id($id);
            return '<div class="alert alert-danger">Merchant Data Deleted. I hope you know what you are doing!</div>';
        }
    }
}

    // public function add_merchant()
    // {

    //     if ($this->request->getMethod() == 'post') {
    //         $db = db_connect();
    //         $merchant_super_model = new SuperFunctionsModel($db);

    //         $file = $this->request->getFile('image_url');
    //         if ($file->isValid() && !$file->hasMoved()) {
    //             $imgName = $file->getRandomName();
    //             $file->move('uploads/', $imgName);
    //         }

    //         $data = [
    //             'merchant_img' => $imgName,
    //             'merchant_name' => $this->request->getVar('mer_name'),
    //             'merchant_phone' => $this->request->getVar('mer_phone'),
    //             'merchant_email' => $this->request->getVar('mer_email'),
    //             'merchant_business_name' => $this->request->getVar('business_name'),
    //             'merchant_business_type' => $this->request->getVar('business_type'),
    //             'merchant_pickup_address' => $this->request->getVar('pickup_add'),
    //             'merchant_pickup_area' => $this->request->getVar('pickup_area'),
    //         ];
    //         $merchant_super_model->add_merchant($data);
    //         return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Added Successfully~');
    //     } else {
    //         echo view('templates/header');
    //         echo view('merchant/add_merchant_form');
    //         echo view('templates/footer');
    //     }
    //     // echo "<pre>";
    //     // print_r($data);
    //     // echo "</pre>";
    // }

    // public function edit_merchant($id)
    // {
    //     $db = db_connect();
    //     $merchant_super_model = new SuperFunctionsModel($db);
    //     $data = $merchant_super_model->get_merchant_by_id($id);

    //     if ($this->request->getMethod() == 'post') {

    //         $old_imgName = $data->merchant_img;
    //         $file = $this->request->getFile('image_url');
    //         if ($file->isValid() && !$file->hasMoved()) {
    //             if (file_exists("uploads/" . $old_imgName)) {
    //                 unlink("uploads/" . $old_imgName);
    //             }
    //             $imgName = $file->getRandomName();
    //             $file->move('uploads/', $imgName);
    //         } else {
    //             $imgName = $old_imgName;
    //         }

    //         $data = [
    //             'merchant_img' => $imgName,
    //             'merchant_name' => $this->request->getVar('mer_name'),
    //             'merchant_phone' => $this->request->getVar('mer_phone'),
    //             'merchant_email' => $this->request->getVar('mer_email'),
    //             'merchant_business_name' => $this->request->getVar('business_name'),
    //             'merchant_business_type' => $this->request->getVar('business_type'),
    //             'merchant_pickup_address' => $this->request->getVar('pickup_add'),
    //             'merchant_pickup_area' => $this->request->getVar('pickup_area'),
    //         ];
    //         $merchant_super_model->update_merchant_by_id($id, $data);
    //         return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Updated Successfully~');
    //     } else {
    //         $found_data['find_merchant'] = $merchant_super_model->get_merchant_by_id($id);
    //         echo view('templates/header');
    //         echo view('merchant/edit_merchant_form', $found_data);
    //         echo view('templates/footer');
    //     }
    // }

    // public function delete_merchant($id)
    // {
    //     $db = db_connect();
    //     $merchant_super_model = new SuperFunctionsModel($db);

    //     $data = $merchant_super_model->get_merchant_by_id($id);
    //     $imgName = $data->merchant_img;

    //     if (file_exists("uploads/" . $imgName)) {
    //         unlink("uploads/" . $imgName);
    //     } else {
    //     }
    //     $merchant_super_model->delete_merchant_by_id($id);
    //     return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Record and Photo Deleted Successfully~');
    // }

    // public function view_merchant()
    // {
    //     $db = db_connect();
    //     $merchant_super_model = new SuperFunctionsModel($db);
    //     $data['all_merchant'] = $merchant_super_model->get_all_merchant();
    //     echo view('templates/header');
    //     echo view('merchant/manage_merchant', $data);
    //     echo view('templates/footer');
    // }


    // ajax TESTING
    // public function add_merchant()
    // {
    //     $db = db_connect();
    //     $merchant_super_model = new SuperFunctionsModel($db);

    //     // $file = $this->request->getPost('image_url');
    //     // if ($file->isValid() && !$file->hasMoved()) {
    //     //     $imgName = $file->getRandomName();
    //     //     $file->move('uploads/', $imgName);
    //     // }

    //     $data = [
    //         'merchant_img' => $this->request->getPost('merchant_img'),
    //         'merchant_name' => $this->request->getPost('merchant_name'),
    //         'merchant_phone' => $this->request->getPost('merchant_phone'),
    //         'merchant_email' => $this->request->getPost('merchant_email'),
    //         'merchant_business_name' => $this->request->getPost('merchant_business_name'),
    //         'merchant_business_type' => $this->request->getPost('merchant_business_type'),
    //         'merchant_pickup_address' => $this->request->getPost('merchant_pickup_address'),
    //         'merchant_pickup_area' => $this->request->getPost('merchant_pickup_area'),
    //     ];
    //     $merchant_super_model->add_merchant($data);
    //     //return $this->response->setJSON($data);
    //     return redirect()->to(base_url('/view_merchant'))->with('status', 'Merchant Added Successfully~');
    //     // $data = ['status' => 'Merchant Added Sucessfully'];
    //     // return $this->response->setJSON($data);=

    // }