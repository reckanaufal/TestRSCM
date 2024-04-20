<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    public $timestamps = false;
    Protected $table = 'biodata';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'nama_lengkap',
        'no_sim',
        'alamat',
        'no_hp'
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

}
