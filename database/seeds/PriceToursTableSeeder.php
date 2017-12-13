<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PriceToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\PriceTour::class, 20)->create();
    }
}
