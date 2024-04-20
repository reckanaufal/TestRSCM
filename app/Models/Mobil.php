<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'mobil';
    public $timestamps = false;
    protected $fillable = [
        'merek',
        'model',
        'no_plat',
        'tarif',
    ];

    public function getDataRental()
    {
        return $this->belongsToMany('mobil', 'rental');
    }
}
