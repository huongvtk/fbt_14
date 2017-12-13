<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Like::class, 20)->create();
    }
}
