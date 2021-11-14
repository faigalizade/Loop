<?php

namespace App\Models;

use App\Models\Model;

class Customer extends Model
{
    public static string $tableName = 'customers';
    const ADMIN_ROLE = 0;
    const CUSTOMER_ROLE = 1;
}