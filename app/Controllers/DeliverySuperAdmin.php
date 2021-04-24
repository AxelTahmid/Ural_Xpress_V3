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

    public function create_invoice()
    {
        if ($this->request->getMethod() == 'post') {
            $db = db_connect();
            $delivery_super_model = new SuperFunctionsModel($db);

            $data = [
                // 'delivery_id' => $this->request->getVar(' '),
                'delivery_invoice_no'  => $this->request->getVar(' '),
                'delivery_invoice_amount' => $this->request->getVar(' '),
                'delivery_recipient_id' => $this->request->getVar(' '),
                'delivery_payment_status' => $this->request->getVar(' '),
                'delivery_status' => $this->request->getVar(' '),
                'publication_status' => $this->request->getVar(' '),
                //'recipient_id',
                'recipient_name' => $this->request->getVar(' '),
                'recipient_phone' => $this->request->getVar(' '),
                'recipient_address' => $this->request->getVar(' '),
                'recipient_area' => $this->request->getVar(' '),
                'recipient_instructions' => $this->request->getVar(' '),
            ];
            $delivery_super_model->add_delivery($data);
            return redirect()->to(base_url('/view_delivery'))->with('status', 'Delivery Details Added Successfully~');
        } else {
            echo view('templates/header');
            echo view('delivery/add_delivery_form');
            echo view('templates/footer');
        }
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    }
}
