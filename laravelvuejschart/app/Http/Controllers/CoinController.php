<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class CoinController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $coins = DB::table('coins')->where('name', '=', 'Bitcoin')->orderBy('year', 'ASC')->get();
        return response()->json($coins);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $coin = new Coin();
        $coin->name = $request->name;
        $coin->year = $request->year;
        $coin->price = $request->price;
        $coin->save();
        return response()->json(['success' => 'Coin has been successfully added'], 200);
    }
}