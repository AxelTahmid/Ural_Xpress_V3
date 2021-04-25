<?php

namespace App\Controllers;

use App\Models\SuperFunctionsModel;

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

    public function add_delivery_with_recipient()
    {
        if ($this->request->getMethod() == 'post') {
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
            return redirect()->to(base_url('/view_delivery'))->with('status', 'Delivery Details Added Successfully~');
        } else {
            echo view('templates/header');
            echo view('delivery/add_delivery');
            echo view('templates/footer');
        }
    }

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
