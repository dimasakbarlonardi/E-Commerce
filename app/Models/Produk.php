<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Produk extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ['produk_id'];
    protected $primaryKey = 'produk_id';

    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'produk_id', 'produk_id');
    }
}
