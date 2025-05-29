<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Pembeli extends Authenticatable
{
    protected $guarded = [];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
