<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenBay extends Model
{
    protected $table = 'chuyenbay';
    protected $fillable = [
        'hang',
        'loai ve',
        'khoi hanh',
        'ha canh',
        'ngay di',
        'gio bay',
    ];
}
