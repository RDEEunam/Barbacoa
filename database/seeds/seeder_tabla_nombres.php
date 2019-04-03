<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB
use DB;

class seeder_tabla_nombres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var[1]='Quesadilla';
        $var[2]='Alambre';
        $var[3]='Especialidad';
        $var[4]='Taco';
        $var[5]='Gringa';
        $var[6]='Torta';

       for ($i=1;$i<=6; $i++){
          DB::table('nombres')->insert([
            'id' => $i,
            'nombre' => $var[$i], 
          ]);
       }
    }
}
