<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states')->insert([         
         ["code" => 'NSW', "name" => 'New South Wales'],
         ["code" => 'QLD', "name" => 'Queensland'],
         ["code" => 'SA', "name" => 'South Australia'],
         ["code" => 'TAS', "name" => 'Tasmania'],
         ["code" => 'VIC', "name" => 'Victoria'],
         ["code" => 'WA', "name" => 'Western Australia'],
         ["code" => 'ACT', "name" => 'Australian Capital Territory'],
         ["code" => 'NT', "name" => 'Northern Territory']

     ]);
    }
}
