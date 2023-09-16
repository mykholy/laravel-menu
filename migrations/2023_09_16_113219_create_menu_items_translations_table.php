<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('label')->nullable();
            $table->string('link')->nullable();
            $table->unsignedBigInteger('menu_items_id');
            $table->foreign('menu_items_id')->references('id')->on(config('menu.table_prefix') . config('menu.table_name_items'))->onDelete('cascade');
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
        Schema::dropIfExists('menu_items_translations');
    }
}
