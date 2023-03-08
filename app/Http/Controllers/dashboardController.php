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


        $categories = DB::table('categories')->get();



        $punsCategories = DB::table('puns')
            ->Join('categories_puns', 'puns.id', '=', 'categories_puns.pun_ID')
            ->select('puns.*', 'categories_puns.category_ID')
            ->get();

        $puns = [];

        foreach ($punsCategories as $pun) {
            if (!array_key_exists($pun->id, $puns)) {
                $puns[$pun->id] = ['pun' => $pun->pun, 'author' => $pun->author, 'categories' => []];
            }
            if (isset($pun->category_ID)) {
                $puns[$pun->id]['categories'][] = $pun->category_ID;
            }
        }


        return view('dashboard', ['puns' => $puns, 'categories' => $categories]);
    }
}