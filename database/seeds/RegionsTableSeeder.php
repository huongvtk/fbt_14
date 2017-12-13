<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Region::class, 20)->create();
    }
}
