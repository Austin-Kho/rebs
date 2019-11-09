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
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\RebsCompany::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'registration_number' => $faker->sentence,
        'ceo' => $faker->sentence,
        'business_number' => $faker->sentence,
        'business_type' => $faker->sentence,
        'sectors' => $faker->sentence,
        'main_tel' => $faker->sentence,
        'main_fax' => $faker->sentence,
        'establishment_date' => $faker->date(),
        'opening_date' => $faker->date(),
        'tax_invoice_email' => $faker->sentence,
        'tax_office' => $faker->sentence,
        'postcode' => $faker->sentence,
        'address' => $faker->sentence,
        'detail_address' => $faker->sentence,
        'extra_address' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
