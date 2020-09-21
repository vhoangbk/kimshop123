<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionCustomer extends Model
{
    protected $table = 'promotion_customers';

    protected $fillable = ['promotion_id', 'customer_id', 'is_active', 'status', 'quantity', 'color', 'description'];
}
