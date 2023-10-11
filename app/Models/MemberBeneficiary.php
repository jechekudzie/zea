<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberBeneficiary extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function get_beneficiary_member($beneficiary)
    {
        return Member::find($beneficiary);

    }
}
