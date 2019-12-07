<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatesTableSeeder::class);

        factory(App\Customer::class, 50)->create();
        factory(App\Product::class, 50)->create();
        factory(App\Rate::class, 50)->create();
    }
}
