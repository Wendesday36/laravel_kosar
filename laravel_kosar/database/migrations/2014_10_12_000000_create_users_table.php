<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('balance');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create([
            'name' => "Franz Kafka", 
            'email' => 'kafka@gmail.com', 
            'password'=>'kafka',
            'balance'=>11010
        ]);
        User::create([
            'name' => "katica", 
            'email' => 'katica@gmail.com', 
            'password'=>'katica',
            'balance'=>157486
        ]);
        User::create([
            'name' => "Boglarka", 
            'email' => 'bogi@gmail.com', 
            'password'=>'bogi',
            'balance'=>156654
        ]);
        User::create([
            'name' => "nyna", 
            'email' => 'nyna@gmail.com', 
            'password'=>'nyna',
            'balance'=>1544876
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
