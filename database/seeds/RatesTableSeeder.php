<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Rate::class, 20)->create();
    }
}
