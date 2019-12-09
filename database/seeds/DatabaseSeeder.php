<?php

use Illuminate\Database\Seeder;
//use Faker\Generator as Faker;
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
        factory(App\Product::class, 500)->create();
        factory(App\Rate::class, 50)->create();


        $faker = Faker\Factory::create();
        foreach (\App\Rate::all() as $rate) {

          for ($i=0; $i < rand(2,8); $i++) {

            $product = \App\Product::all()->random(1)->first();
            $item = new \App\RateItem();

            $item->rate_id = $rate->id;
            $item->product_id = $product->id;
            $item->code = $product->code;
            $item->description = $product->description;
            $item->unit = $product->unit;
            $item->cost_exgst = $product->cost_exgst;
            $item->cost_incgst = $product->cost_incgst;
            $item->cost_type = $product->cost_type;
            $item->save();

          }
        }

        foreach (\App\Customer::all() as $customer) {

          for ($i=0; $i < rand(1,10); $i++) {
            $estimate = new \App\Estimate();

            $customer = \App\Customer::all()->random(1)->first();

            $estimate->project_name = $faker->catchPhrase;
            $estimate->customer_id = $customer->id;
            $estimate->due_dt = $faker->dateTimeBetween($startDate = '-2 years', $endDate = '1 year', $timezone = null);
            $estimate->price_dt = $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null);
            $estimate->project_street = $faker->streetAddress;
            $estimate->project_suburb = $faker->city;
            $estimate->project_state = \App\State::all()->random(1)->first()->id;
            $estimate->project_contact = $customer->contact;
            $estimate->project_contact_phone = $customer->contact_phone;
            $estimate->project_contact_mobile = $customer->contact_mobile;
            $estimate->project_contact_email = $customer->contact_email;
            $estimate->cost_exgst = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200000);
            $estimate->cost_incgst = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200000);
            $estimate->total_exgst = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200000);
            $estimate->total_incgst = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200000);
            $estimate->total_gst = $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200000);
            $estimate->save();

          }

        }

    }
    
}
