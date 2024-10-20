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
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id'); // 'id' int(4) - auto-increment primary key
            $table->boolean('active')->default(0); // 'active' int(1) default 0
            $table->string('name1')->nullable(); // 'name1' string nullable
            $table->string('phone1')->nullable(); // 'phone1' string nullable
            $table->integer('t1')->default(8); // 't1' int(2) default 8
            $table->string('name2')->nullable(); // 'name2' string nullable
            $table->string('phone2')->nullable(); // 'phone2' string nullable
            $table->integer('t2')->nullable(); // 't2' int(2) nullable

            $table->timestamps(); // Automatically includes created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
