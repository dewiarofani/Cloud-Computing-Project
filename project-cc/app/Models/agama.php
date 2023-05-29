<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class agama extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'agama';
    // data mana saja yang mau diedit
    protected $fillable = [
        'Kecamatan', 'Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Lainnya'
    ];

    // function getAgama(){
    //     $return=DB::table('agama')
    // }

    protected $hidden = [];
}
