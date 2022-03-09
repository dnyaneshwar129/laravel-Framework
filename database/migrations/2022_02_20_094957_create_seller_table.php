<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller', function (Blueprint $table) {
            $table->id('seller_id');
            $table->string('name',60);
            $table->string('email',100);
         ///   $table->enum('gender',["M","F","O"]);
            $table->text('bussinessname', 100);
            $table->text('avatar', 150);
 //           $table->date('dob')->nullable;
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller');
        
        

    }
};
