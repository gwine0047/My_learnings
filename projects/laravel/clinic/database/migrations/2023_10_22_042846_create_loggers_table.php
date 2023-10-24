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
        Schema::create('loggers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->float('deposit')->default(0.00);
            $table->float('interest')->default(0.00);
            $table->float('totalI')->default(0.00);
            $table->float('totalD')->default(0.00);
            $table->float('totalW')->default(0.00);
            $table->float('referral')->default(0.00);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loggers');
    }
};
