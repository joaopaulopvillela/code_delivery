<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(CodeDelivery\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(CodeDelivery\Models\Category::class, function(Faker\Generator $fake){

    return [
        'name' => $fake->word
    ];
});

$factory->define( \CodeDelivery\Models\Product::class, function(\Faker\Generator $fake){

    return [
        'name' => $fake->word,
        'description' => $fake->text,
        'price' => $fake->numberBetween(15,70)
    ];
});

$factory->define(CodeDelivery\Models\Client::class, function(Faker\Generator $fake){

    return [
        'phone' => $fake->phoneNumber,
        'address' => $fake->address,
        'city' => $fake->city,
        'state' => $fake->state,
        'zipcode' => $fake->postcode,
    ];
});

$factory->define(CodeDelivery\Models\Order::class, function(Faker\Generator $fake){

    return [
        'client_id' => rand(1,10),
        'total' => $fake->numberBetween(50,150),
        'status' => rand(0,2),
    ];
});
$factory->define(CodeDelivery\Models\OrderItem::class, function(Faker\Generator $fake){

    return [
        'product_id' => rand(1,50),
        'price' => $fake->numberBetween(20,50),
        'qtd' => rand(1,20)
    ];
});
