<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getTasks()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos');

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'Falha ao buscar os dados'], 500);
    }
}
