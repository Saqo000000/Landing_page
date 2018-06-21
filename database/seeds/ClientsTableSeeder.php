<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = new DateTime();
    	$dt->format('Y-m-d H:i:s');
        DB::table('clients')->insert(
        	array(
	        	[
    	            'name'       => 'client_logo1.png',
    	            'created_at' => $dt,
    	            'updated_at' => $dt
	        	],
	        	[
    	            'name'       => 'client_logo2.png',
    	            'created_at' => $dt,
    	            'updated_at' => $dt
	        	],
                [
                    'name'       => 'client_logo3.png',
                    'created_at' => $dt,
                    'updated_at' => $dt
                ],
                [
                    'name'       => 'client_logo5.png',
                    'created_at' => $dt,
                    'updated_at' => $dt
                ]
    		)
    	);
    }
}
