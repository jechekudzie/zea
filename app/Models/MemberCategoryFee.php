<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberCategoryFee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member_category()
    {
        return $this->belongsTo(MemberCategory::class);
    }
}
