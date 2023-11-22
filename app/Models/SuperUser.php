<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperUser extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'superuser';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
