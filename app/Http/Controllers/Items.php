<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Items extends Controller
{
    public function index(){
        // GET BIKES FROM DB
        $items = DB::table('item_list')->get();
        return view('home', compact('items'));
    }

    public function insert(Request $request){
        DB::table('item_list')->insert([
            'itemName' => $request->inputName,
            'itemStatus' => $request->inputStatus,
            'itemQuantity' => $request->inputQuantity,
            'itemPrice' => $request->inputPrice
        ]);

        return redirect('/');
    }
}
