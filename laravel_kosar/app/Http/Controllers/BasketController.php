<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index(){
        return response()->json(Basket::all());
    }

    public function show($user_id, $item_id){
        $basket = Basket::where('user_id', $user_id)
        ->where('item_id',"=", $item_id)
        ->get();
        return $basket[0];
    }

    public function store(Request $request){
        $item = new Basket();
        $item->user_id = $request->user_id;
        $item->item_id = $request->item_id;
                
        $item->save();
    }

    public function update(Request $request, $user_id, $item_id){
        $item = $this->show($user_id, $item_id);
        $item->user_id = $request->user_id;
        $item->item_id = $request->item_id;

        $item->save();
    }

    public function destroy($user_id, $item_id){
        $this->show($user_id, $item_id)->delete();
    }
    //2es feladat:
    public function ItemwithB()
    {
        $userId = Auth::user()->id;
        return DB::select("SELECT pt.name
                                FROM baskets b
                                    INNER JOIN products p ON b.item_id = p.item_id
                                    INNER JOIN product_types pt ON p.type_id = pt.type_id 
                                WHERE user_id = $userId AND pt.name LIKE 'b%'");
    }
    //3mas feladat:
    public function AddItem($itemId)
    {
        $userId = Auth::user()->id;
        $basketItem = new Basket();
        $basketItem->user_id = $userId;
        $basketItem->item_id = $itemId;
        return $basketItem->save();
    }
    //4es feladat
    
  
}
