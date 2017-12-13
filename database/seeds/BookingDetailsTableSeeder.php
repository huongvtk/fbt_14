<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BookingDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BookingDetail::class, 20)->create();
    }
}
