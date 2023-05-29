<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pertumbuhan extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'pertumbuhan';
    // data mana saja yang mau diedit
    protected $fillable = [
        'Kecamatan', 'Penduduk (ribu)', 'Laju Pertumbuhan per Tahun', 'Persentase Penduduk', 'Kepadatan Penduduk per km2'
    ];

    // function getAgama(){
    //     $return=DB::table('agama')
    // }

    protected $hidden = [];
}
