<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Upload extends Model
{
    use HasFactory;

    public static function insertData($data){

        $value=DB::table('plugins')->where('repository_url', $data['repository_url'])->get();
        if($value->count() == 0){
            DB::table('plugins')->insert($data);
        }
    }

}
