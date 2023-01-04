<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dori extends Model
{
    use HasFactory;
    protected $table = "dori";
    protected $primarykey = "id";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
