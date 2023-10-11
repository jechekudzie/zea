<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function member_category_fee()
    {
        return $this->hasOne(MemberCategoryFee::class);
    }

    public function member_subscriptions()
    {
        return $this->hasMany(MemberSubscription::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
