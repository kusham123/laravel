<?php

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
        Schema::create('cutsomers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["M", "F", "O"]);  // deside male of femail
            $table->text('address');
            $table->string('password'); //take bydefalut 256 character
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps(); // create_at update_at
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutsomer');
    }
};
