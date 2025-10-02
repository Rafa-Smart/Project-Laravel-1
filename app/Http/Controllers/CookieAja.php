<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieAja extends Controller
{
    public function setCookie(Request $request): Response
    {
        return response("heloo cookie sudah di set")->withCookie(cookie('nama', 'Rafa', 60, '/'));
    }

    public function getCookie(Request $request):JsonResponse
    {
        return response()->json([
            "nama" => $request->cookie('nama',"guest")
        ]);
    }

    public function hapusCookie(Request $request):Response{
        return response("sudah dihapus")->withoutCookie("nama");
    }
}
