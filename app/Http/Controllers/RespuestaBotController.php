<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RespuestaBot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class RespuestaBotController extends Controller
{
    public function index(Request $request)
    {
        $canal = $request->query('canal', 'whatsapp'); // Default canal
        $userId = Auth::id();

        $datosBot = RespuestaBot::where('user_id', $userId)
                                ->where('canal', $canal)
                                ->first();

        return view('respuestas.unica', compact('datosBot', 'canal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol' => 'required|string|max:255',
            'personalidad' => 'required|string|max:255',
            'nombre_bot' => 'required|string|max:255',
            'nombre_empresa' => 'required|string|max:255',
            'items' => 'required|array|min:1',
            'items.*.pregunta' => 'required|string',
            'items.*.respuesta' => 'required|string',
        ]);

        $userId = Auth::id();
        $canal = $request->canal;

        $data = [
            'rol' => $request->rol,
            'personalidad' => $request->personalidad,
            'nombre_bot' => $request->nombre_bot,
            'nombre_empresa' => $request->nombre_empresa,
            'contenido' => $request->items,
            'canal' => $request->canal,
            'user_id' => auth()->id(),
        ];
        

        RespuestaBot::updateOrCreate(
            ['user_id' => $userId, 'canal' => $canal],
            $data
        );

        $response = Http::withBasicAuth('tatsuadmin', 'eyJ0eXDiOiJKV1QiLCJhbGciOiJIUzI1NiJ9')
        ->post('https://n8n2gus.vgroup.cl/webhook/actualizar-bot', [
            'user_id' => $userId,
        ]);
        
        


        return redirect()->route('respuestas-bot.index', ['canal' => $canal])->with('success', 'Configuración guardada correctamente.');
    }
}
