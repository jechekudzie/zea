<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function member_category()
    {
        return $this->belongsTo(MemberCategory::class);
    }

    public function identification_type()
    {
        return $this->belongsTo(IdentificationType::class);
    }

    public function member_contact()
    {
        return $this->hasOne(MemberContact::class);
    }

    public function member_employment()
    {
        return $this->hasOne(MemberEmployment::class);
    }

    public function member_subscriptions()
    {
        return $this->hasMany(MemberSubscription::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public  function user_member()
    {
        return $this->$this->hasOne(UserMember::class);
    }

    public function add_member_contact($contact)
    {
        return $this->member_contact()->create($contact);
    }

    public function add_member_employment($employment)
    {
        return $this->member_employment()->create($employment);
    }

}
