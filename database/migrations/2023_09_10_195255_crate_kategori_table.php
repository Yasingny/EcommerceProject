<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CrateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ust_id')->nullable();
            $table->string('kategori_adi',30);
            $table->string('slug',40);
            $table->timestamp('Oluşturma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('Güncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            //$table->softDeletes();
            $table->timestamp('silinme_tarihi')->nullable();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
