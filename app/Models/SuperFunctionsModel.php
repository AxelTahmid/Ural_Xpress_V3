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

    function view_delivery()
    {
        $builder = $this->db->table('ux_delivery');
        $builder->join('ux_recipient', 'ux_delivery.delivery_recipient_id = ux_recipient.recipient_id ');
        $data = $builder->get()->getResult();
        return $data;
    }

    function view_merchant()
    {
        $builder = $this->db->table('ux_merchant');
        $data = $builder->get()->getResult();
        return $data;
    }
}
