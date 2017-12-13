<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Price::class, 20)->create();
    }
}
