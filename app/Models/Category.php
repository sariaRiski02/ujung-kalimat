<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';
    protected $primaryKey = 'id_category';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $guarded = [
        'id_category'
    ];
}
