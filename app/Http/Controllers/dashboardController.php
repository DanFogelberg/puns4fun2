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



        $punsCategories = DB::table('puns')
            ->leftJoin('categories_puns', 'puns.id', '=', 'categories_puns.pun_ID')
            ->select('puns.*', 'categories_puns.category_ID')
            ->get();

        return view('dashboard', ['puns' => $puns, 'categories' => $categories, 'punsCategories' => $punsCategories]);
    }
}