<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrController extends Controller
{
    public function notFound(Request $request)
    {
        return response()->view('404', [], 404);
    }
}
