<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    // use SoftDeletes;
     /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'books';
    /**
     * The attributes that are mass assignable.
     *
    //  * @var array $fillable
    //  */
    // protected $fillable = [
    //     'id', 'title'
    // ];

}
