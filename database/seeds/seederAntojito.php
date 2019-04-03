<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seederAntojito extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
	 * php artisan db:seed --class=seederAntojito
     */
	 
	 
    public function run()
    {
		DB::table('nombres')->truncate();
		
		$var[1]='Quesadilla';
        $var[2]='Alambre';
        $var[3]='Especialidad';
        $var[4]='Taco';
        $var[5]='Gringa';
        $var[6]='Torta';
		
		for ($i=1;$i<=6; $i++){
          DB::table('nombres')->insert([
            'nombre' => $var[$i], 
          ]);
       }

    }
}
