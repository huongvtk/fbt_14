<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Tour;
use App\Models\Review;
use App\Models\Region;
use App\Models\Rate;
use App\Models\PriceTour;
use App\Models\Price;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Category;
use App\Models\BookingTour;
use App\Models\BookingDetail;
use App\Models\BankDetail;
use App\Models\Bank;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
static $password;

    return [
        'username' => $faker->unique()->name,  
        'email' => $faker->unique()->safeEmail, 
        'password' => bcrypt(123456), 
        'remember_token' => bcrypt(123456), 
        'fullname' => $faker->name, 
        'date_birth' => $faker->date, 
        'gender'=> $faker->numberBetween(0, 1),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'role' => $faker->numberBetween(0, 2),
    ];
});

$factory->define(Tour::class, function (Faker $faker) {
    $ownerId = User::pluck('id')->all(); 
    $categoryId = Category::pluck('id')->all();
    $regionId = Region::pluck('id')->all(); 

    return [
        'owner_id' => $ownerId[array_rand($ownerId)], 
        'category_id' => $categoryId[array_rand($categoryId)], 
        'region_id' => $regionId[array_rand($regionId)], 
        'tourname' => $faker->name, 
        'num_day' => $faker->numberBetween(1, 100), 
        'picture' => $faker->imageUrl($width = 200, $height = 200), 
        'description' =>$faker->text, 
        'amount' => $faker->numberBetween(1, 100), 
        'check_approve' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(Review::class, function (Faker $faker) {
    $tourId = Tour::pluck('id')->all();
    $userId = User::pluck('id')->all();

    return [
        'tour_id' => $tourId[array_rand($tourId)],
        'user_id' => $userId[array_rand($userId)],  
        'content' => $faker->text,
    ];
});

$factory->define(Region::class, function (Faker $faker) {

    return [
        'region_name' => $faker->name,
    ];
});

$factory->define(Rate::class, function (Faker $faker) {
    $tourId = Tour::pluck('id')->all();
    $userId = User::pluck('id')->all();
    
    return [
        'tour_id' => $tourId[array_rand($tourId)],
        'user_id' => $userId[array_rand($userId)],
        'points'  => $faker->numberBetween(1, 5),
    ];
});

$factory->define(PriceTour::class, function (Faker $faker) {
    $priceId = Price::pluck('id')->all();
    $tourId = Tour::pluck('id')->all();

    return [
        'price_id' => $priceId[array_rand($priceId)],
        'tour_id' => $tourId[array_rand($tourId)], 
        'date' => $faker->date,
    ];
});

$factory->define(Price::class, function (Faker $faker) {

    return [
        'prices' => $faker->numberBetween(1, 1000000000),
    ];
});

$factory->define(Like::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();
    $reviewId = Review::pluck('id')->all();
    
    return [
        'user_id' => $userId[array_rand($userId)], 
        'review_id' => $reviewId[array_rand($reviewId)],
        'num_like' => $faker->numberBetween(1, 1000000),
    ];
        
});

$factory->define(Comment::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();
    $reviewId = Review::pluck('id')->all();

    return [
        'user_id' => $userId[array_rand($userId)], 
        'review_id' => $reviewId[array_rand($reviewId)],
        'content' => $faker->text,
    ];
});

$factory->define(Category::class, function (Faker $faker) {

    return [
        'cat_name' => $faker->text,
        'parent_id' => $faker->numberBetween(0, 20),
    ];
});

$factory->define(BookingTour::class, function (Faker $faker) {
    $tourId = Tour::pluck('id')->all();
    $userId = User::pluck('id')->all();

    return [
        'tour_id' => $tourId[array_rand($tourId)],
        'date_create' => $faker->date,
        'start_day' => $faker->date,
        'num_people' => $faker->numberBetween(1, 200),
        'total_price' => $faker->numberBetween(1, 1000000000),
        'num_child' => $faker->numberBetween(1, 100),
        'user_id' => $userId[array_rand($userId)],
        'status' => $faker->numberBetween(0, 1),
    ];
});

$factory->define(BookingDetail::class, function (Faker $faker) {
    $bookingId = BookingTour::pluck('id')->all();

    return [
        'fullname' => $faker->name,
        'booking_id' => $bookingId[array_rand($bookingId)],
        'day_birth' => $faker->date,
        'gender' => $faker->numberBetween(0, 1),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'cmnd' => $faker->creditCardNumber,
        'job' =>$faker->jobTitle,
    ];
});

$factory->define(BankDetail::class, function (Faker $faker) {
    $userId = User::pluck('id')->all();
    $bankId = Bank::pluck('id')->all();

    return [
        'user_id' => $userId[array_rand($userId)],
        'bank_id' => $bankId[array_rand($bankId)],
        'bank_account' => $faker->bankAccountNumber,
    ];
});

$factory->define(Bank::class, function (Faker $faker) {   

    return [
        'bank_name' => $faker->name,
        'bank_code' => $faker->swiftBicNumber,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,   
    ];
});


