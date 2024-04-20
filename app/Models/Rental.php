<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'rental';
    public $timestamps = false;
    protected $fillable = [
        'mobil_id',
        'tgl_mulai',
        'tgl_selesai',
        'status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    // public function getDataMobil()
    // {
    //     return $this->hasMany('rental', 'mobil', 'mobil_id', 'id');
    // }

    public function mobil()
    {    
        return $this->belongsTo('App\Models\Mobil', 'mobil_id', 'id');
    }
}
