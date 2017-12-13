<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BookingToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BookingTour::class, 20)->create();
    }
}
