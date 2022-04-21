<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('table_foto', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('featured_image')->after('jurusan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('table_foto');
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropColumn('featured_image');  
        });
    }
}
