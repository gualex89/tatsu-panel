<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\RespuestaBot;

class BotConfigController extends Controller
{
    public function clavija(Request $request)
    {
        $status = (int) $request->input('status'); // 1 o 0
        $canal  = $request->input('canal');
        $id_bot  = $request->input('id_bot');

        // Guardar en BD
        RespuestaBot::where('id', $id_bot)
            ->update(['status' => $status]);

        // Ejemplo de pegarle a un endpoint externo
        
        $respond = Http::post('https://tatsubot.makenafundas.com.ar/webhook/cambia-status', [
            'id_bot'  => $id_bot,
            'canal'   => $canal,
            'status'  => $status
        ]);
        
        // Verificar si fue exitosa
        if ($respond->successful()) {
            // Si la API responde JSON, puedes obtenerlo así:
            $data = $respond->json();
        
            return response()->json([
                'ok'     => true,
                'status' => $status,
                'api'    => $data
            ]);
        } else {
            // Manejo de error
            return response()->json([
                'ok'      => false,
                'status'  => $status,
                'mensaje' => 'Error al comunicarse con la API externa',
                'error'   => $respond->body()
            ], $respond->status());
        }
        
    }
}
