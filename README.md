Planet Provider for Faker
---

This package will allow [Faker](https://github.com/FakerPHP/Faker) to generate fake Planets

## Install

To install, use composer:

```bash
composer soul-was-here/faker-planet
```

## Usage

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\Planet($faker));

/*
 * Generate planet name.
 */ 
echo $faker->planetName(); //Clenai

/*
 * Generate planet type.
 */ 
echo $faker->planetType(); //Gas Giant

/*
 * Generate planet size based on Earth's radius (R / R Earth).
 * Between 0.4x Earth radius and 15x Earth radius.
 */
echo $faker->planetSize(); //1.5

/*
 * Generate planet radius.
 * Between 0.4x Earth radius (2548 km) and 15x Earth radius (95565 km).
 */
echo $faker->planetRadius(); // 5885

/*
 * Generate planet gravity based on Earth's gravity (G / G Earth).
 * Between 0.5x Earth gravity and 400x Earth gravity.
 */
echo $faker->planetGravity(); // 1.8

/*
 * Generate planet average temperature.
 * Between -250°C and 1100°C
 */
echo $faker->planetTemperature(); // 230

/*
 * Generate prevalence of water in percent.
 * Between 0% and 100%
 */
echo $faker->planetWaterPrevalence(); // 25


/*
 * Generate an array representation of an Ice Giant planet.
 */ 
echo $faker->planetIceGiant();

//[
//    'planetType' => 'Ice Giant',
//    'planetSize' => 3.59,
//    'planetRadius' => 22871,
//    'planetGravity' => 201.04,
//    'planetTemperature' => 340,
//    'planetWaterPrevalence' => 9
//]

// You can choose any of these predefined planet types:

$faker->planetIceGiant();
$faker->planetDesert();
$faker->planetEarthLike();
$faker->planetGasGiant();
$faker->planetHumid();
$faker->planetIceGiant();
$faker->planetIce();
$faker->planetRockyExtremeTemperatures();
$faker->planetRockyNoAtmosphere();
$faker->planetRockyFurnace();
$faker->planetRocky();
$faker->planetToxic();
$faker->planetWaterWorld(); 

```