<?php

use App\Models\Product;
use App\Models\ProductType;
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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->longText('description');
            $table->integer('cost')->default(200);
            $table->timestamps();
        });
        ProductType::create([
            'name' => "valami", 
            'description' => 'description', 
            'cost'=>158,
        ]);
        ProductType::create([
            'name' => "bebeb", 
            'description' => 'description', 
            'cost'=>158,
        ]);
        ProductType::create([
            'name' => "baba", 
            'description' => 'description', 
            'cost'=>158,
        ]);
        ProductType::create([
            'name' => "valami", 
            'description' => 'description', 
            'cost'=>158,
        ]);


        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
