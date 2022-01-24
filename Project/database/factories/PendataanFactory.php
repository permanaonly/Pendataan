<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mahasiswa;
use Faker\Generator as Faker;

$factory->define(mahasiswa::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->numberBetween($min = 1, $max = 10000),
        'nama_lengkap'=>$faker->name,
        'tempat_lahir'=>$faker->city,
        'tanggal_lahir'=>$faker->date($format = 'Y-m-d', $max = '2005-01-01'),
        'email'=>$faker->email,
        'no_wa'=>$faker->phoneNumber,
        'asal_sekolah'=>$faker->company,
        'Jurusan'=>$faker->jobTitle,
         'awal_magang'=>$faker->date($format = 'Y-m-d', $max = 'now'),
         'selesai_magang'=>$faker->date($format = 'Y-m-d', $max = '2030-12-12'),
    ];
});
