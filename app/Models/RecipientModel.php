<?php

namespace App\Models;

use CodeIgniter\Model;

class RecipientModel extends Model
{
    protected $table = 'ux_recipient';
    protected $primaryKey = 'recipient_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'recipient_id', 'recipient_name',
        'recipient_phone', 'recipient_address',
        'recipient_area', 'recipient_instructions'
    ];
    protected $returnType = 'array';
}
