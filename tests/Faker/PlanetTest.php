<?php

namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Planet;
use PHPUnit\Framework\TestCase;

class PlanetTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new Planet($faker));
        $this->faker = $faker;
    }

    public function testPlanetNameReturns(): void
    {
        $this->faker->seed(1);
        $this->assertEquals('Agrra', $this->faker->planetName());
    }

    public function testPlanetTypeReturns(): void
    {
        $this->assertTrue(in_array(
            $this->faker->planetType(),
            [
                'Ice Giant',
                'Rocky',
                'Earth-like',
                'Water World',
                'Desert',
                'Humid',
                'Ice',
                'Rocky Furnace',
                'Rocky Planet (Extreme temperatures)',
                'Gas Giant',
                'Toxic Planet (Atmosphere lethal to humans)',
                'Rocky Planet (No atmosphere)',
            ]
        ));
    }

    public function testPlanetSizeReturns(): void
    {
        $size = $this->faker->planetSize();

        $this->assertTrue(.4 <= $size && 15 >= $size);
    }

    public function testPlanetRadiusReturns(): void
    {
        $radius = $this->faker->planetRadius();

        $this->assertTrue(2548 <= $radius && 95565 >= $radius);
    }

    public function testPlanetGravityReturns(): void
    {
        $gravity = $this->faker->planetGravity();

        $this->assertTrue(0.5 <= $gravity && 400 >= $gravity);
    }

    public function testPlanetWaterReturns(): void
    {
        $water = $this->faker->planetWaterPrevalence();

        $this->assertTrue(0 <= $water && 100 >= $water);
    }

    public function testPlanetTemplate(): void
    {
        $iceGiant = $this->faker->planetIceGiant();
        $this->assertCount(7, $iceGiant);
        $this->assertArrayHasKey('planetName', $iceGiant);
        $this->assertArrayHasKey('planetType', $iceGiant);
        $this->assertArrayHasKey('planetSize', $iceGiant);
        $this->assertArrayHasKey('planetRadius', $iceGiant);
        $this->assertArrayHasKey('planetGravity', $iceGiant);
        $this->assertArrayHasKey('planetTemperature', $iceGiant);
        $this->assertArrayHasKey('planetWaterPrevalence', $iceGiant);
        $this->assertIsFloat($iceGiant['planetSize']);
        $this->assertIsInt($iceGiant['planetRadius']);
        $this->assertIsFloat($iceGiant['planetGravity']);
        $this->assertIsInt($iceGiant['planetTemperature']);
        $this->assertIsInt($iceGiant['planetWaterPrevalence']);
    }

    public function testPlanetIceGiantReturns(): void
    {
        $iceGiant = $this->faker->planetIceGiant();

        $this->assertSame('Ice Giant', $iceGiant['planetType']);
        $this->assertTrue(3 <= $iceGiant['planetSize'] && 7 >= $iceGiant['planetSize']);
        $this->assertTrue(3 * Planet::EARTH_SIZE <= $iceGiant['planetRadius'] && 7 * Planet::EARTH_SIZE >= $iceGiant['planetRadius']);
        $this->assertTrue(0.8 <= $iceGiant['planetGravity'] && 400 >= $iceGiant['planetGravity']);
        $this->assertTrue(-250 <= $iceGiant['planetTemperature'] && 350 >= $iceGiant['planetTemperature']);
        $this->assertTrue(0 <= $iceGiant['planetWaterPrevalence'] && 15 >= $iceGiant['planetWaterPrevalence']);
    }

    public function testPlanetRockyReturns(): void
    {
        $rocky = $this->faker->planetRocky();

        $this->assertSame('Rocky', $rocky['planetType']);
        $this->assertTrue(0.4 <= $rocky['planetSize'] && 9 >= $rocky['planetSize']);
        $this->assertTrue(0.4 * Planet::EARTH_SIZE <= $rocky['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rocky['planetRadius']);
        $this->assertTrue(0.7 <= $rocky['planetGravity'] && 2 >= $rocky['planetGravity']);
        $this->assertTrue(-90 <= $rocky['planetTemperature'] && 90 >= $rocky['planetTemperature']);
        $this->assertTrue(15 <= $rocky['planetWaterPrevalence'] && 50 >= $rocky['planetWaterPrevalence']);
    }

    public function testPlanetDesertReturns(): void
    {
        $desert = $this->faker->planetDesert();

        $this->assertSame('Desert', $desert['planetType']);
        $this->assertTrue(0.4 <= $desert['planetSize'] && 9 >= $desert['planetSize']);
        $this->assertTrue(0.4 * Planet::EARTH_SIZE <= $desert['planetRadius'] && 9 * Planet::EARTH_SIZE >= $desert['planetRadius']);
        $this->assertTrue(0.7 <= $desert['planetGravity'] && 2 >= $desert['planetGravity']);
        $this->assertTrue(-75 <= $desert['planetTemperature'] && 350 >= $desert['planetTemperature']);
        $this->assertTrue(0 <= $desert['planetWaterPrevalence'] && 25 >= $desert['planetWaterPrevalence']);
    }

    public function testPlanetEarthLikeReturns(): void
    {
        $earthLike = $this->faker->planetEarthLike();

        $this->assertSame('Earth-like', $earthLike['planetType']);
        $this->assertTrue(.4 <= $earthLike['planetSize'] && 9 >= $earthLike['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $earthLike['planetRadius'] && 9 * Planet::EARTH_SIZE >= $earthLike['planetRadius']);
        $this->assertTrue(0.7 <= $earthLike['planetGravity'] && 2 >= $earthLike['planetGravity']);
        $this->assertTrue(-65 <= $earthLike['planetTemperature'] && 120 >= $earthLike['planetTemperature']);
        $this->assertTrue(30 <= $earthLike['planetWaterPrevalence'] && 80 >= $earthLike['planetWaterPrevalence']);
    }

    public function testPlanetGasGiantReturns(): void
    {
        $gasGiant = $this->faker->planetGasGiant();

        $this->assertSame('Gas Giant', $gasGiant['planetType']);
        $this->assertTrue(4 <= $gasGiant['planetSize'] && 15 >= $gasGiant['planetSize']);
        $this->assertTrue(4 * Planet::EARTH_SIZE <= $gasGiant['planetRadius'] && 15 * Planet::EARTH_SIZE >= $gasGiant['planetRadius']);
        $this->assertTrue(0.8 <= $gasGiant['planetGravity'] && 400 >= $gasGiant['planetGravity']);
        $this->assertTrue(-100 <= $gasGiant['planetTemperature'] && 1100 >= $gasGiant['planetTemperature']);
        $this->assertTrue(0 <= $gasGiant['planetWaterPrevalence'] && 0 >= $gasGiant['planetWaterPrevalence']);
    }

    public function testPlanetHumidReturns(): void
    {
        $humid = $this->faker->planetHumid();

        $this->assertSame('Humid', $humid['planetType']);
        $this->assertTrue(4 <= $humid['planetSize'] && 9 >= $humid['planetSize']);
        $this->assertTrue(4 * Planet::EARTH_SIZE <= $humid['planetRadius'] && 9 * Planet::EARTH_SIZE >= $humid['planetRadius']);
        $this->assertTrue(0.7 <= $humid['planetGravity'] && 2 >= $humid['planetGravity']);
        $this->assertTrue(5 <= $humid['planetTemperature'] && 75 >= $humid['planetTemperature']);
        $this->assertTrue(50 <= $humid['planetWaterPrevalence'] && 80 >= $humid['planetWaterPrevalence']);
    }

    public function testPlanetIceReturns(): void
    {
        $ice = $this->faker->planetIce();

        $this->assertSame('Ice', $ice['planetType']);
        $this->assertTrue(.4 <= $ice['planetSize'] && 9 >= $ice['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $ice['planetRadius'] && 9 * Planet::EARTH_SIZE >= $ice['planetRadius']);
        $this->assertTrue(0.7 <= $ice['planetGravity'] && 2 >= $ice['planetGravity']);
        $this->assertTrue(-250 <= $ice['planetTemperature'] && -50 >= $ice['planetTemperature']);
        $this->assertTrue(0 <= $ice['planetWaterPrevalence'] && 15 >= $ice['planetWaterPrevalence']);
    }

    public function testPlanetRockyExtremeTemperaturesReturns(): void
    {
        $rockyExtremeTemperatures = $this->faker->planetRockyExtremeTemperatures();

        $this->assertSame('Rocky (Extreme temperatures)', $rockyExtremeTemperatures['planetType']);
        $this->assertTrue(.4 <= $rockyExtremeTemperatures['planetSize'] && 9 >= $rockyExtremeTemperatures['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $rockyExtremeTemperatures['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rockyExtremeTemperatures['planetRadius']);
        $this->assertTrue(0.7 <= $rockyExtremeTemperatures['planetGravity'] && 2 >= $rockyExtremeTemperatures['planetGravity']);
        $this->assertTrue(-250 <= $rockyExtremeTemperatures['planetTemperature'] && 510 >= $rockyExtremeTemperatures['planetTemperature']);
        $this->assertTrue(0 <= $rockyExtremeTemperatures['planetWaterPrevalence'] && 0 >= $rockyExtremeTemperatures['planetWaterPrevalence']);
    }

    public function testPlanetRockyNoAtmosphereReturns(): void
    {
        $rockyExtremeTemperatures = $this->faker->planetRockyNoAtmosphere();

        $this->assertSame('Rocky (No atmosphere)', $rockyExtremeTemperatures['planetType']);
        $this->assertTrue(.4 <= $rockyExtremeTemperatures['planetSize'] && 9 >= $rockyExtremeTemperatures['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $rockyExtremeTemperatures['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rockyExtremeTemperatures['planetRadius']);
        $this->assertTrue(0.7 <= $rockyExtremeTemperatures['planetGravity'] && 2 >= $rockyExtremeTemperatures['planetGravity']);
        $this->assertTrue(-240 <= $rockyExtremeTemperatures['planetTemperature'] && 170 >= $rockyExtremeTemperatures['planetTemperature']);
        $this->assertTrue(0 <= $rockyExtremeTemperatures['planetWaterPrevalence'] && 15 >= $rockyExtremeTemperatures['planetWaterPrevalence']);
    }

    public function testPlanetRockyFurnaceReturns(): void
    {
        $rockyExtremeTemperatures = $this->faker->planetRockyFurnace();

        $this->assertSame('Rocky Furnace', $rockyExtremeTemperatures['planetType']);
        $this->assertTrue(.4 <= $rockyExtremeTemperatures['planetSize'] && 9 >= $rockyExtremeTemperatures['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $rockyExtremeTemperatures['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rockyExtremeTemperatures['planetRadius']);
        $this->assertTrue(0.7 <= $rockyExtremeTemperatures['planetGravity'] && 2 >= $rockyExtremeTemperatures['planetGravity']);
        $this->assertTrue(300 <= $rockyExtremeTemperatures['planetTemperature'] && 600 >= $rockyExtremeTemperatures['planetTemperature']);
        $this->assertTrue(0 <= $rockyExtremeTemperatures['planetWaterPrevalence'] && 0 >= $rockyExtremeTemperatures['planetWaterPrevalence']);
    }

    public function testPlanetToxicReturns(): void
    {
        $rockyExtremeTemperatures = $this->faker->planetToxic();

        $this->assertSame('Toxic (Atmosphere lethal to humans)', $rockyExtremeTemperatures['planetType']);
        $this->assertTrue(.4 <= $rockyExtremeTemperatures['planetSize'] && 9 >= $rockyExtremeTemperatures['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $rockyExtremeTemperatures['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rockyExtremeTemperatures['planetRadius']);
        $this->assertTrue(0.7 <= $rockyExtremeTemperatures['planetGravity'] && 2 >= $rockyExtremeTemperatures['planetGravity']);
        $this->assertTrue(-100 <= $rockyExtremeTemperatures['planetTemperature'] && 250 >= $rockyExtremeTemperatures['planetTemperature']);
        $this->assertTrue(0 <= $rockyExtremeTemperatures['planetWaterPrevalence'] && 60 >= $rockyExtremeTemperatures['planetWaterPrevalence']);
    }

    public function testPlanetWaterWorldReturns(): void
    {
        $rockyExtremeTemperatures = $this->faker->planetWaterWorld();

        $this->assertSame('Water World', $rockyExtremeTemperatures['planetType']);
        $this->assertTrue(.4 <= $rockyExtremeTemperatures['planetSize'] && 9 >= $rockyExtremeTemperatures['planetSize']);
        $this->assertTrue(.4 * Planet::EARTH_SIZE <= $rockyExtremeTemperatures['planetRadius'] && 9 * Planet::EARTH_SIZE >= $rockyExtremeTemperatures['planetRadius']);
        $this->assertTrue(0.7 <= $rockyExtremeTemperatures['planetGravity'] && 2 >= $rockyExtremeTemperatures['planetGravity']);
        $this->assertTrue(-20 <= $rockyExtremeTemperatures['planetTemperature'] && 98 >= $rockyExtremeTemperatures['planetTemperature']);
        $this->assertTrue(75 <= $rockyExtremeTemperatures['planetWaterPrevalence'] && 100 >= $rockyExtremeTemperatures['planetWaterPrevalence']);
    }

}
