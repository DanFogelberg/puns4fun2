<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $puns = Pun::all();
        $categories = Category::all();

        $category = $request->get('category');

        if ($category) {
            $puns = $categories->where('category', $category)->first()->puns;
        };


        return view('dashboard', ['puns' => $puns, 'categories' => $categories]);
    }
}