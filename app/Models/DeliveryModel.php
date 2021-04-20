<?php

namespace App\Models;

use CodeIgniter\Model;

class DeliveryModel extends Model
{
    protected $table = 'ux_delivery';
    protected $primaryKey = 'delivery_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'delivery_id', 'delivery_invoice_no',
        'delivery_invoice_amount', 'delivery_recipient_id',
        'delivery_payment_status', 'delivery_status',
        'publication_status'
    ];
    protected $returnType = 'array';
}
