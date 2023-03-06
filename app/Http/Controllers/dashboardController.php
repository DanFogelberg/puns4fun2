<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pun;

class dashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $puns = DB::table('puns')->get();


        $categories = DB::table('categories')->get();

        $pun = $request->only(['pun', 'author']);
        if (isset($pun['pun']) && isset($pun['author'])) {

            Pun::create($pun);
        }

        return view('dashboard', ['puns' => $puns, 'pun' => $pun, 'categories' => $categories],);
    }
}