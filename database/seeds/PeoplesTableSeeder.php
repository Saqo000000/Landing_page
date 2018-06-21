<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
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
        DB::table('peoples')->insert(
        	array(
	        	[
		            'name'           => 'Tom Rensed',
		            'position'       => 'Chief Executive Officer',
		            'images'         => 'team_pic1.jpg',
		            'text'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',

		            'created_at'    => $dt,
		            'updated_at'    => $dt
	        	],
	        	[
		            'name'           => 'Kathren Mory',
		            'position'       => 'Vice President',
		            'images'         => 'team_pic2.jpg',
		            'text'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',

		            'created_at'    => $dt,
		            'updated_at'    => $dt
	        	],	        	
	        	[
		            'name'           => 'Lancer Jack',
		            'position'       => 'Senior Manager',
		            'images'         => 'team_pic3.jpg',
		            'text'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.',

		            'created_at'    => $dt,
		            'updated_at'    => $dt
	        	],
	        	
    		)
    	);
    }
}
