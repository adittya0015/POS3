<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'penerimaan';

    protected $fillable = [
        'kd_penerimaan', 'sub_total','potongan', 'grand_total', 'keterangan', 'id_user', 'id_supplier',
    ];

    public function detailP()
    {
        return $this->hasMany(Detail_Penerimaan::class);
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'id_supplier');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
