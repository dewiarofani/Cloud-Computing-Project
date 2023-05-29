<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SebaranUsia extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'usia';
    // data mana saja yang mau diedit
    protected $fillable = [
        'Kelompok Usia', 'Laki-Laki', 'Perempuan'
    ];

    // function getAgama(){
    //     $return=DB::table('agama')
    // }

    protected $hidden = [];
}
