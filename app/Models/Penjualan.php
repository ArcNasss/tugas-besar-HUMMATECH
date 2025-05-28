<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $guarded = [];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class);
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class);
    }

    public function detailPenjualans()
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}
