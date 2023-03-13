<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pun;


class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $puns = Pun::all();
        $categories = Category::all();


        //If viewing category has been selected, only view puns from that category
        $viewCategory = $request->get('category');
        if ($viewCategory) {
            $puns = $categories->where('category', $viewCategory)->first()->puns;
        };


        return view('dashboard', ['puns' => $puns, 'categories' => $categories]);
    }
}