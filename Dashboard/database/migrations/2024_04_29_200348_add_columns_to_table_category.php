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
        Schema::table('category', function (Blueprint $table) {
            //
            $table->integer('parent_id')->after('Category_id');
            $table->text('category_image')->nullable()->after('CategoryName');
            $table->decimal('category_discount', 8, 2)->after('category_image');
            $table->text('description')->after('category_discount');
            $table->string('url')->after('description');
            $table->boolean('status')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_category', function (Blueprint $table) {
            //
        });
    }
};
