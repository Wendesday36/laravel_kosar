<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('type_id')->references('type_id')->on('product_types');
            $table->date('date');
            $table->integer('quantity')->default(20);
            $table->timestamps();
        });
        Product::create([
            'type_id' => 1, 
            'date' => 20200104,
            
            
        ]);
        Product::create([
            'type_id' => 1, 
            'date' => 20200404,
            
            
        ]);
        Product::create([
            'type_id' => 3, 
            'date' => 20200504,
           
            
        ]);
        Product::create([
            'type_id' => 2, 
            'date' => 20200504,
           
            
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
