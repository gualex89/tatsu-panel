<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestaBot extends Model
{
    protected $table = 'respuestas_bot';

    protected $fillable = [
        'rol',
        'personalidad',
        'nombre_bot',
        'nombre_empresa',
        'contenido',
        'canal',
        'user_id',
    ];
    

    protected $casts = [
        'contenido' => 'array', // Para trabajar el JSON como array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
