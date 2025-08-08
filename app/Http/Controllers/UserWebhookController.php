<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RespuestaBot;
use Illuminate\Support\Facades\Hash;

class UserWebhookController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email',
            
        ]);

        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            'password' => Hash::make('tatsu' . strtolower($request->nombre)),
            'usa_whatsapp' => $request->usa_whatsapp,
            'usa_instagram' => $request->usa_instagram,
        ]);

        $user->save();

        if ($request->usa_whatsapp) {
            $respuestasBot = new RespuestaBot();
            $respuestasBot->user_id = $user->id;
            $respuestasBot->canal = 'whatsapp';
            $respuestasBot->nombre_empresa = $request->nombre;
            $respuestasBot->save();
        
        }

        if ($request->usa_instagram) {
            $respuestasBot = new RespuestaBot();
            $respuestasBot->user_id = $user->id;
            $respuestasBot->canal = 'instagram';
            $respuestasBot->nombre_empresa = $request->nombre;
            $respuestasBot->save();
        }
        


        

        return response()->json(['success' => true, 'user_id' => $user->id, 'usa_whatsapp' => $request->usa_whatsapp, 'usa_instagram' => $request->usa_instagram]);
    }
}
