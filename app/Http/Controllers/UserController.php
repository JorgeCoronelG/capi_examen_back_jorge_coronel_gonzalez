<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function listaUsuario(): JsonResponse
    {
        $usuarios = User::with('domicilio')->get();
        return response()->json(UserResource::collection($usuarios));
    }
}
