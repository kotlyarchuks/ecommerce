<?php

namespace App\Coupons;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function getByCode($code)
    {
        return self::where('code', $code)->first();
    }

    public function coupon()
    {
        return $this->morphTo();
    }

    public function discount($amount)
    {
        return $this->coupon->discount($amount);
    }
}
