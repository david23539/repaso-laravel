<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class rellenaNotas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 40; $i++){
            DB::table('notes')->insert(array(
               'title'=>'Mi nota '.$i,
               'descripcion'=>' La descripcion de la nota '.$i
            ));
        }

        $this->command->info('tablas de notas rellenada correctamente');
    }
}
