<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pun;

class adminController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {



        $deletePuns = $request->all();

        foreach ($deletePuns as $id => $pun) {
            if ($pun === 'on') {
                Pun::where('id', $id)->delete();
            }
        }
        $puns = DB::table('puns')->get();

        return view('admin', ['puns' => $puns]);
    }
}