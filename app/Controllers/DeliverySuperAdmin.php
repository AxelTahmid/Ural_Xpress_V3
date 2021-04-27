<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;

use monken\TablesIgniter;

class DeliverySuperAdmin extends BaseController
{

    public function view_delivery()
    {
        $db = db_connect();
        $delivery_super_model = new SuperFunctionsModel($db);
        $data['all_delivery'] = $delivery_super_model->fetch_all_delivery();
        echo view('templates/header');
        echo view('delivery/manage_delivery', $data);
        echo view('templates/footer');
    }


    public function action_invoice()
    {
        if ($this->request->getVar('action')) {
            helper(['form', 'uri']);
            $recipient_name_err = '';
            $recipient_phone_err = '';
            $delivery_address_err = '';
            $delivery_area_err = '';
            $instructions_err = '';
            $invoice_err = '';
            $invoice_amount_err = '';
            $deliverystatus_err = '';
            $payment_err = '';
            $publication_err = '';
            $error = 'no';
            $err_message = '';
            $success = 'no';

            $error = $this->validate([
                'recipient_name' => 'required|min_length[3]',
                'recipient_phone' => 'required|min_length[11]',
                'delivery_address' => 'required',
                'delivery_area' => 'required',
                'instructions' => 'required',
                'invoice' => 'required',
                'invoice_amount' => 'required',
                'deliverystatus' => 'required',
                'payment' => 'required',
                'publication' => 'required'
            ]);
            if (!$error) {
                $error = 'yes';
                $validation = \Config\Services::validation();
                if ($validation->getError('recipient_name')) {
                    $recipient_name_err = $validation->getError('recipient_name');
                }
                if ($validation->getError('recipient_phone')) {
                    $recipient_phone_err = $validation->getError('recipient_phone');
                }
                if ($validation->getError('delivery_address')) {
                    $delivery_address_err = $validation->getError('delivery_address');
                }
                if ($validation->getError('delivery_area')) {
                    $delivery_area_err = $validation->getError('delivery_area');
                }
                if ($validation->getError('instructions')) {
                    $instructions_err = $validation->getError('instructions');
                }
                if ($validation->getError('invoice')) {
                    $invoice_err = $validation->getError('invoice');
                }
                if ($validation->getError('invoice_amount')) {
                    $invoice_amount_err = $validation->getError('invoice_amount');
                }
                if ($validation->getError('deliverystatus')) {
                    $deliverystatus_err = $validation->getError('deliverystatus');
                }
                if ($validation->getError('payment')) {
                    $payment_err = $validation->getError('payment');
                }
                if ($validation->getError('publication')) {
                    $publication_err = $validation->getError('publication');
                }
            } else {
                $success = 'yes';
                if ($this->request->getVar('action') == 'Add') {
                    $db = db_connect();
                    $delivery_super_model = new SuperFunctionsModel($db);
                    $rc_data = [
                        'recipient_name' => $this->request->getVar('recipient_name'),
                        'recipient_phone' => $this->request->getVar('recipient_phone'),
                        'recipient_address' => $this->request->getVar('delivery_address'),
                        'recipient_area' => $this->request->getVar('delivery_area'),
                        'recipient_instructions' => $this->request->getVar('instructions'),
                    ];
                    $delivery_super_model->add_recipient($rc_data);
                    $fk_recipient_id = $db->insertID();
                    $dv_data = [
                        'delivery_recipient_id' => $fk_recipient_id,
                        'delivery_invoice_no'  => $this->request->getVar('invoice'),
                        'delivery_invoice_amount' => $this->request->getVar('invoice_amount'),
                        'delivery_payment_status' => $this->request->getVar('payment'),
                        'delivery_status' => $this->request->getVar('deliverystatus'),
                        'publication_status' => $this->request->getVar('publication'),
                    ];
                    $delivery_super_model->add_delivery($dv_data);

                    $err_message = '<div class="alert alert-success">Invoice Created</div>';
                }
            }
            $output = array(
                'recipient_name_err' => $recipient_name_err,
                'recipient_phone_err' => $recipient_phone_err,
                'delivery_address_err' => $delivery_address_err,
                'delivery_area_err' => $delivery_area_err,
                'instructions_err' => $instructions_err,
                'invoice_err' => $invoice_err,
                'invoice_amount_err' => $invoice_amount_err,
                'deliverystatus_err' => $deliverystatus_err,
                'payment_err' => $payment_err,
                'publication_err' => $publication_err,
                'error' => $error,
                'success' => $success,
                'err_message' => $err_message
            );
            return json_encode($output);
        };
    }

    // public function add_delivery_with_recipient()
    // {
    //     if ($this->request->getMethod() == 'post') {
    //         $db = db_connect();
    //         $delivery_super_model = new SuperFunctionsModel($db);
    //         $rc_data = [
    //             'recipient_name' => $this->request->getVar('recipient_name'),
    //             'recipient_phone' => $this->request->getVar('recipient_phone'),
    //             'recipient_address' => $this->request->getVar('delivery_address'),
    //             'recipient_area' => $this->request->getVar('delivery_area'),
    //             'recipient_instructions' => $this->request->getVar('instructions'),
    //         ];
    //         $delivery_super_model->add_recipient($rc_data);
    //         $fk_recipient_id = $db->insertID();
    //         $dv_data = [
    //             'delivery_recipient_id' => $fk_recipient_id,
    //             'delivery_invoice_no'  => $this->request->getVar('invoice'),
    //             'delivery_invoice_amount' => $this->request->getVar('invoice_amount'),
    //             'delivery_payment_status' => $this->request->getVar('payment'),
    //             'delivery_status' => $this->request->getVar('deliverystatus'),
    //             'publication_status' => $this->request->getVar('publication'),
    //         ];
    //         $delivery_super_model->add_delivery($dv_data);
    //         return redirect()->to(base_url('/view_delivery'))->with('status', 'Delivery Details Added Successfully~');
    //     } else {
    //         echo view('templates/header');
    //         echo view('delivery/add_delivery');
    //         echo view('templates/footer');
    //     }
    // }

    public function delete_invoice_by_id($id)
    {
        $db = db_connect();
        $delivery_super_model = new SuperFunctionsModel($db);
        $delivery_super_model->delete_invoice($id);
        return redirect()->to(base_url('/view_delivery'))->with('status', 'Invoice and Recipient Deleted Successfully~');
    }

    public function edit_invoice_by_id($id)
    {
        $db = db_connect();
        $delivery_super_model = new SuperFunctionsModel($db);
        $data = $delivery_super_model->get_invoice_by_id($id);;

        if ($this->request->getMethod() == 'post') {
            $rc_data = [
                'recipient_name' => $this->request->getVar('recipient_name'),
                'recipient_phone' => $this->request->getVar('recipient_phone'),
                'recipient_address' => $this->request->getVar('delivery_address'),
                'recipient_area' => $this->request->getVar('delivery_area'),
                'recipient_instructions' => $this->request->getVar('instructions'),
            ];
            $delivery_super_model->update_recipient_by_id($id, $rc_data);

            $dv_data = [
                'delivery_invoice_no'  => $this->request->getVar('invoice'),
                'delivery_invoice_amount' => $this->request->getVar('invoice_amount'),
                'delivery_payment_status' => $this->request->getVar('payment'),
                'delivery_status' => $this->request->getVar('deliverystatus'),
                'publication_status' => $this->request->getVar('publication'),
            ];
            $delivery_super_model->update_delivery_by_id($id, $dv_data);

            return redirect()->to(base_url('/view_delivery'))->with('status', 'Invoice and Recipient Updated Successfully~');
        } else {
            $found_data['find_delivery'] = $delivery_super_model->get_invoice_by_id($id);
            echo view('templates/header');
            echo view('delivery/edit_delivery', $found_data);
            echo view('templates/footer');
        }
    }
}
