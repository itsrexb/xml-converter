<?php

declare(strict_types=1);

namespace Dmb\XmlConverter\Tests;

use Dmb\XmlConverter\FromXml;
use Gaarf\XmlToPhp\XmlParsingExcpetion;

class FromXmlTest extends TestCase
{
    /** @test */
    public function it_converted_to_a_valid_array()
    {
        try {
            $converted = (new FromXml())
                ->convertToArray($this->getValidXml());
        } catch (XmlParsingExcpetion $e) {
            $error = $e->getMessage();
        }

        $this->assertTrue(is_array($converted));
    }

    /** @test */
    public function it_throws_a_parsing_exception_if_xml_is_not_valid()
    {
        try {
            $convertedXml = (new FromXml())
                ->convertToArray($this->getInvalidXml());
        } catch (XmlParsingExcpetion $e) {
            $error = $e->getMessage();
        }

        $this->assertEquals($error, self::PARSING_XML_ERROR);
    }

    /** @test */
    public function it_converted_to_the_expected_array()
    {
        try {
            $convertedXml = (new FromXml())
                ->convertToArray($this->getValidXml());
        } catch (XmlParsingExcpetion $e) {
            $error = $e->getMessage();
        }

        $this->assertEquals($this->expectedArray(), $convertedXml);
    }
}
