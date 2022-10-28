<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberSubscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function payment_status()
    {
        return $this->belongsTo(PaymentStatus::class);
    }

    public function compliance_status()
    {
        return $this->belongsTo(ComplianceStatus::class);
    }

    public function member_category()
    {
        return $this->belongsTo(MemberCategory::class);
    }

    public function create_payment($payment)
    {
        return $this->payments()->create($payment);
    }
}
