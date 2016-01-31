<?php
namespace TimeZone;

class ConstantsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider timezones
     */
    public function it_should_contain_the_upper_cased_constant_version_of_the_timezone_string($timezone)
    {
        $constant = strtoupper(preg_replace('/[^a-zA-Z0-9]/', '_', $timezone));

        $fullyQualifiedConstant = "TimeZone\\Constants::$constant";

        $this->assertTrue(defined($fullyQualifiedConstant), "Constant $constant is not defined.");
        $this->assertEquals(constant($fullyQualifiedConstant), $timezone, "Constant $constant and $timezone differ.");
    }

    /**
     * @test
     * @dataProvider constants
     */
    public function it_should_contain_all_valid_strings_for_date_time_zone_objects($timezone)
    {
        $this->assertInstanceOf(\DateTimeZone::class, new \DateTimeZone($timezone));
    }

    public function timezones()
    {
        return array_map([$this, 'toArray'], \DateTimeZone::listIdentifiers());
    }

    public function constants()
    {
        $ref = new \ReflectionClass(Constants::class);

        return array_map([$this, 'toArray'], $ref->getConstants());
    }

    protected function toArray($arg)
    {
        return [$arg];
    }
}
