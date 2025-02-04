<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return response()->json(User::all());
    }

    public function show($id){
        return response()->json(User::find($id));
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->balance = $request->balance;
                
        $user->save();
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->balance = $request->balance;

        $user->save();
    }

    public function destroy($id){
        User::find($id)->delete();
    }
    public function showProductsById($userId, $tipus){
        $products = DB::table('baskets')
            ->join('products', 'baskets.item_id', '=', 'products.item_id')
            ->join('product_types', 'products.type_id', '=', 'product_types.type_id')
            ->where('baskets.user_id', $userId)
            ->where('product_types.name', $tipus)
            ->select('baskets.*')
            ->get();
    
        return response()->json($products);
    }

}
