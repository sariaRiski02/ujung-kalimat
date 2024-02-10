<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id_user';
    // protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $guarded = [
        'id_user'
    ];
}
