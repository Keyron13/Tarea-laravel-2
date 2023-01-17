<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    use HasFactory;
    protected $table = 'frutas';
    public $timestamps = false;
    protected $fillable = ['nombre', 'cantidad'];
}
