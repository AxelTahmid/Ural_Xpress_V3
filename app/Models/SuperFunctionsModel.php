<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class SuperFunctionsModel
{

    protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    //Method chaining has been used with query builder class. available by default in CI4

    function view_delivery()
    {
        return $this->db->table('ux_delivery')
            ->join('ux_recipient', 'ux_delivery.delivery_recipient_id = ux_recipient.recipient_id ')
            ->get()->getResult();
    }

    //equivalent to SELECT * FROM 'ux_merchant'
    function get_all_merchant()
    {
        return $this->db->table('ux_merchant')->get()->getResult();
    }

    //pass primary key as id for delete
    function delete_merchant_by_id($id)
    {
        return  $this->db->table('ux_merchant')->delete(['merchant_id' => $id]);
    }

    //need to pass the primary key as id and data array to update table
    function update_merchant_by_id($id, $data)
    {
        $query = $this->db->table('ux_merchant')->where('merchant_id', $id)->update($data);
    }

    //pass data array as params to add new merchant
    function add_merchant($data)
    {
        return  $this->db->table('ux_merchant')->insert($data);
    }
}
