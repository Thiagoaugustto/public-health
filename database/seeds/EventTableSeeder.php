<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	[
	        	'title' 		=> 'Consulta',
	        	'start' 		=> '2019-10-11 21:30:00',
	        	'end'   		=> '2019-10-12 21:30:00',
	        	'color' 		=> '#c40233',
	        	'description' 	=> 'Consulta agendada com a paciente Maria'
        	],
        	[
	        	'title' 		=> 'Exame',
	        	'start' 		=> '2019-10-14',
	        	'end'   		=> '2019-10-14',
	        	'color' 		=> '#29fdf2',
	        	'description' 	=> 'Exame agendado com a paciente Maria'
        	]

    	]);
    }
}
