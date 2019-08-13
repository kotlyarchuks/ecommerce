<?php

namespace App\Coupons;

use Illuminate\Database\Eloquent\Model;

class FixedValueCoupon extends Model
{
    protected $table = 'fixed_value_coupons';

    public function discount($amount)
    {
        return $this->value;
    }
}