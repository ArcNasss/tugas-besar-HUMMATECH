<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $guarded = [];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
