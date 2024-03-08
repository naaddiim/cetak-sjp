<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rm extends Model
{
    use HasFactory;
    public static function someFUnctionName($rm)
    {
        return DB::statement('call some_procedure(?)', [$rm]);
    }
}
