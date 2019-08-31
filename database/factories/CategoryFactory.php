<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$title = $faker->sentence(4); // con esto da de alta que cualquier titulo con 4 palabras
    return [
    	'name' => $title,
    	'slug' => str_slug($title), // se utiliza para declarar lo que acompaña el URL ej: www.caca.cl/type-caca
    	'body' => $faker->text(500),

    ];
});
