<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addPunController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (isset($_POST['newPun']));

        return view('addPun');
    }
}