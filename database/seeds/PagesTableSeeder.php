<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
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
        DB::table('pages')->insert(
        	array(
	        	[
	            'name'       => 'home',
	            'alias'      => 'hero_section',
	            'text'       => '<h2>We create <strong>awesome</strong> web templates</h2>',
	            'images'     => 'main_device_image.png',

	            'created_at' => $dt,
	            'updated_at' => $dt
	        	],
	        	[
	            'name'       => 'about us',
	            'alias'      => 'aboutUs',
	            'text'       => "<h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p><br><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>",
	            'images'     => 'about-img.jpg',

	            'created_at' => $dt,
	            'updated_at' => $dt
	        	]
    		)
    	);
    }
}
