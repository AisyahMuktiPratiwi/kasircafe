<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiHeader extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function logactivity()
{
    return $this->belongsTo(ActivityLog::class, 'activitylog_id');
}

    public function relasiCart()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
