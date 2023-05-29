<?php

namespace App\Models;

/*use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;*/

class Informasi /*extends Model*/
{
    private static $berdasarkan_agama = [
        "body" => "Badan Pusat Statistik adalah Lembaga Pemerintah Non Kementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik."
];

    public static function all()
    {
        return collect(self::$berdasarkan_agama);
    }

    public static function find($slug){
        $posts = static::all();

        /*$posts = self::$berdasarkan_agama;
        $post = [];
        foreach($posts as $p){
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }*/

        return $posts->firstWhere('slug', $slug);
    }
    /*use HasFactory;*/
}
