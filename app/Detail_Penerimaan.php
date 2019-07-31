<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Penerimaan extends Model
{
    protected $table = 'detail__penerimaan';

    protected $fillable = ['qty', 'harga', 'total'];

    public function penerimaan()
    {
        return $this->hasMany(Penerimaan::class);
    }

    public function barang()
    {
        return $this->belongsTo('App\Barang', 'id_barang');
    }   
}
