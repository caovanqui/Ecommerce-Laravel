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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->string('img', 255);
            $table->boolean('hot')->default(false);
            $table->boolean('popular')->default(false);
            $table->boolean('sale')->default(false);
            $table->text('des')->nullable();
            $table->date('date')->nullable();
            $table->string('thumbnail_img')->nullable();
            $table->integer('quantity')->default(0); // Cột số lượng sản phẩm
            $table->boolean('status')->default(true); // Cột trạng thái sản phẩm
            $table->timestamps();

            //Khóa ngoại
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
