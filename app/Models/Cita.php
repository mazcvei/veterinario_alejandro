<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = "citas";
    protected $primaryKey ="id";
    protected $fillable = ['mascota_id','user_id','fecha','comentario'];

    public function mascota(){
        return $this->belongsTo(Mascota::class,'mascota_id','id');
    }

}
