<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Review::class, 20)->create();
    }
}
