<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(),
        'image_url' =>$faker->randomElement(['https://placeimg.com/900/400/any','https://picsum.photos/900/400']),
        'feedback' => $faker->randomNumber(2),
        'userId' => $faker->randomDigitNotNull(1),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(),
        'image_url' => $faker->sentence,
        'feedback' => $faker->randomNumber(5),
        'userId' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
