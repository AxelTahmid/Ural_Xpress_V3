<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Query;

class SuperFunctionsModel
{

    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    //Method chaining has been used with query builder class. available by default in CI4
    //equivalent to SELECT * FROM 'ux_merchant'
    function fetch_all_merchant()
    {
        return $this->db->table('ux_merchant');
        // didnt close query because tableigniter takes builder class only
    }
    function mer_action_button()
    {
        $edit_button = function ($id) {
            return "<button type='button' name='edit_merchant' class='btn btn-success btn-sm edit_merchant' data-id='" . $id['merchant_id'] . "'><i class='fas fa-edit'></i></button>
                    <button type='button' name='delete_merchant' class='btn btn-danger btn-sm delete_merchant' data-id='" . $id['merchant_id'] . "'><i class='far fa-trash-alt'></i></button>";
        };
        return $edit_button;
    }

    function get_merchant_by_id($id)
    {
        return $this->db->table('ux_merchant')->where('merchant_id', $id)->get()->getRow();
    }

    //pass primary key as id for delete
    function delete_merchant_by_id($id)
    {
        return  $this->db->table('ux_merchant')->delete(['merchant_id' => $id]);
    }

    //need to pass the primary key as id and data array to update table
    function update_merchant_by_id($id, $data)
    {
        return $this->db->table('ux_merchant')->where('merchant_id', $id)->update($data);
    }

    //pass data array as params to add new merchant
    function add_merchant($data)
    {
        return  $this->db->table('ux_merchant')->insert($data);
    }


    //Delivery Methods
    function fetch_all_delivery()
    {
        return $this->db->table('ux_delivery')
            ->join('ux_recipient', 'ux_delivery.delivery_recipient_id = ux_recipient.recipient_id ');
        // didnt close query because tableigniter takes builder class only
    }
    function edit_button()
    {
        $edit_button = function ($id) {
            return "<button type='button' name='edit_invoice' class='btn btn-success btn-sm edit_invoice' data-id='" . $id['delivery_id'] . "'><i class='fas fa-edit'></i></button>
                    <button type='button' name='delete_invoice' class='btn btn-danger btn-sm delete_invoice' data-id='" . $id['delivery_id'] . "'><i class='far fa-trash-alt'></i></button>";
        };
        return $edit_button;
    }
    function get_invoice_by_id($id)
    {
        return $this->db->table('ux_delivery')
            ->join('ux_recipient', 'ux_delivery.delivery_recipient_id = ux_recipient.recipient_id ')
            ->where('delivery_id', $id)
            ->get()
            ->getRow();
    }
    function add_recipient($data)
    {
        return $this->db->table('ux_recipient')->insert($data);
    }
    function add_delivery($data)
    {
        return $this->db->table('ux_delivery')->insert($data);
    }
    function update_recipient_by_id($id, $data)
    {
        return $this->db->table('ux_recipient')->where('recipient_id', $id)->update($data);
    }
    function update_delivery_by_id($id, $data)
    {
        return $this->db->table('ux_delivery')->where('delivery_id', $id)->update($data);
    }
    function delete_invoice($id)
    {
        $this->db->table('ux_recipient')->delete(['recipient_id' => $id]);
        $this->db->table('ux_delivery')->delete(['delivery_id' => $id]);
    }
}
