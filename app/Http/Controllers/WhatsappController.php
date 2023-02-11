<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index(Request $request)
    {
        $array = ["error" => [], 'data' => []];

        $req = [
            "data"      => json_encode($request->all()),
            "method"    => $request->method()
        ];

        Whatsapp::create($req);

        return $array;
    }
}
