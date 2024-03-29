<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the TransaksiDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaksi()
    {
        return $this->belongsTo(TransaksiHeader::class, 'transaksi_id', 'id');
    }

    /**
     * Get the user that owns the TransaksiDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function relasiCart()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}