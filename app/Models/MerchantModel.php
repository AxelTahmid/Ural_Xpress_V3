<?php

namespace App\Models;

use CodeIgniter\Model;

class MerchantModel extends Model
{
    protected $table = 'ux_merchant';
    protected $primaryKey = 'merchant_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'merchant_id', 'merchant_img', 'merchant_name',
        'merchant_phone', 'merchant_email', 'merchant_business_name',
        'merchant_business_type', 'merchant_pickup_address',
        'merchant_pickup_area'
    ];
    protected $returnType = 'array';
}
