<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function member_subscription()
    {
        return $this->belongsTo(MemberSubscription::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class);
    }
}
