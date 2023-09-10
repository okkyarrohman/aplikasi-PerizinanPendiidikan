<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "perizinan";
    protected $guarded = [];

}
