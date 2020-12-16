<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projek3 extends Model
{
    protected $table='projek3s';
    protected $fillable=[
        'kode','tujuan', 'jenis', 'stok', 'harga'
    ];
    public function projek3s(){
        return $this->belongsToMany('App\projek3s');
    }
}

