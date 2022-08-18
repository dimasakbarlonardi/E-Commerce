<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PesananDetail extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ['pesanandetail_id'];
    protected $primaryKey = 'pesanandetail_id';
    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'produk_id', 'produk_id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan', 'pesanan_id', 'pesanan_id');
    }
}
