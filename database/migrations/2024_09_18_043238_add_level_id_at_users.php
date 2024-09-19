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
        schema::table('users', function (Blueprint $table) {    if (!Schema::hasColumn('users', 'level_id')) {        $table->unsignedBigInteger('level_id')->nullable()->after('id');    }    $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null');});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //
        
    }
};
