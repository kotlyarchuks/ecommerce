<?php

namespace App\Coupons;

use Illuminate\Database\Eloquent\Model;

class PercentOffCoupon extends Model
{
    protected $table = 'percent_off_coupons';

    public function discount($amount)
    {
        return $amount * ($this->value / 100);
    }
}