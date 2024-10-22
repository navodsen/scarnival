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
        Schema::table('tables', function (Blueprint $table) {
            $table->boolean('collect')->default(0)->after('t2'); // Add the 'collect' column
            $table->text('comment')->nullable()->after('collect'); // Add the 'comment' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            $table->dropColumn('collect'); // Drop the 'collect' column
            $table->dropColumn('comment'); // Drop the 'comment' column
        });
    }
};
