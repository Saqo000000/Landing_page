<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
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
        DB::table('services')->insert(
        	array(
            	[
        	        'name'       => 'Android',
        	        'text'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        	        'icon'       => 'fa fa-android',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
            	[
        	        'name'       => 'Apple IOS',
        	        'text'       => '',
        	        'icon'       => 'fa fa-apple',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
            	[
        	        'name'       => 'Design',
        	        'text'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        	        'icon'       => 'fa fa-html5',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
            	[
        	        'name'       => 'Concept',
        	        'text'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        	        'icon'       => 'fa fa-dropbox',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
            	[
        	        'name'       => 'User Research',
        	        'text'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        	        'icon'       => 'fa fa-slack',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
            	[
        	        'name'       => 'User Experience',
        	        'text'       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        	        'icon'       => 'fa fa-users',
        	        'created_at' => $dt,
        	        'updated_at' => $dt
            	],
        	)
        );
    }
}
