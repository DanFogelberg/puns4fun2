<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pun;

class addPunController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pun = $request->only(['pun', 'author']);
        if (isset($pun['pun']) && isset($pun['author'])) {

            Pun::create($pun);
        }

        //if (isset($_POST['newPun']));

        return view('addPun', ['pun' => $pun]);
    }
}