<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
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
        DB::table('portfolios')->insert(
        	array(
            	[
        	        'name'         => 'Finance App',
        	        'images'       => 'portfolio_pic2.jpg',
        	        'filter'       => 'appleIOS',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'GPS Concept',
        	        'images'       => 'portfolio_pic3.jpg',
        	        'filter'       => 'design',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'Shopping',
        	        'images'       => 'portfolio_pic4.jpg',
        	        'filter'       => 'android',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'Managment',
        	        'images'       => 'portfolio_pic5.jpg',
        	        'filter'       => 'design',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'iPhone',
        	        'images'       => 'portfolio_pic6.jpg',
        	        'filter'       => 'web',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'Nexus Phone',
        	        'images'       => 'portfolio_pic7.jpg',
        	        'filter'       => 'android',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'Androoid',
        	        'images'       => 'portfolio_pic8.jpg',
        	        'filter'       => 'web',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
            	[
        	        'name'         => 'SMS Mobile App',
        	        'images'       => 'portfolio_pic1.jpg',
        	        'filter'       => 'appleIOS',

        	        'created_at'   => $dt,
        	        'updated_at'   => $dt
            	],
        	)
        );
    }
}
