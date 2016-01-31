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
        $this->assertInstanceOf(\DateTimeZone::class, new \DateTimeZone(constant($fullyQualifiedConstant)));
    }

    public function timezones()
    {
        return array_map(function($timezone){
            return [$timezone];
        }, \DateTimeZone::listIdentifiers());
    }
}
