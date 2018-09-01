<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class AddFieldFrutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('frutas', function (Blueprint $table){
            $table -> string('pais')->after('temporal');
            $table -> renameColumn('nombre_fruta', 'nombre');
        });*/

        DB::statement(
            'CREATE TABLE probandosql(
                id int(255) auto_increment not null,
                publication int(255),
                PRIMARY KEY (id)  
             )'
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
