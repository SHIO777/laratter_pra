<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    // 以下はuseが入力するのではなく，application側で自動入力するもの
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
    
    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }
}
