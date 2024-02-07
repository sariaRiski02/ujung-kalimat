<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $guarded = [
        'id_post'
    ];
}
