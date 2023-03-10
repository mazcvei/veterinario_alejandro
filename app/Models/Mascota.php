<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = "mascotas";
    protected $primaryKey ="id";

    protected $fillable = ['nombre','edad','raza','user_id'];

}
