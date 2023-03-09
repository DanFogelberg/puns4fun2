<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pun;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Category_pun;


class addPunController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $categories = DB::table('categories')->get();


        $this->validate($request, [
            'pun' => 'required|string|min:20|max:400',
            'author' => 'required|string|min:1|max:30',
        ]);

        $pun = $request->only(['pun', 'author', 'cat', 'celebrities', 'countries', 'baking']);
        if (!(isset($pun['cat']) || isset($pun['celebrities']) || isset($pun['countries']) || isset($pun['baking']))) {
            return Redirect::to('/')->withErrors("Please choose a category");
        }
        if (isset($pun['pun']) && isset($pun['author'])) {
            $punId = Pun::create(['pun' => $pun['pun'], 'author' => $pun['author']])->id;


            foreach ($categories as $category) {
                $categoryName = $category->category;


                if (isset($pun[$categoryName])) {

                    Category_pun::create(['pun_ID' => $punId, 'category_ID' => $category->id]);
                }
            }
        }

        return Redirect::to('/');
    }
}