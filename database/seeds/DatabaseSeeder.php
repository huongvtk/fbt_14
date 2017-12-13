<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            PricesTableSeeder::class,
            CategoriesTableSeeder::class,
            RegionsTableSeeder::class,
            BanksTableSeeder::class,
            BankDetailsTableSeeder::class,        
            ToursTableSeeder::class,
            BookingToursTableSeeder::class,        
            BookingDetailsTableSeeder::class,           
            ReviewsTableSeeder::class,
            CommentsTableSeeder::class,
            LikesTableSeeder::class,
            RatesTableSeeder::class,
            PriceToursTableSeeder::class,
        ]);
    }
}
