<?php

namespace Dmb\XmlConverter\Tests;

use Dmb\XmlConverter\FromArray;
use Dmb\XmlConverter\Tests\TestCase;

class FromArrayTest extends TestCase
{
    /** @test */
    public function it_converted_to_xml()
    {
        $convertedArray = (new FromArray())
            ->convertToXml(
                $this->expectedArray(),
                'envelope'
            );

        $this->assertEquals(
            simplexml_load_string($this->getValidXml()),
            simplexml_load_string($convertedArray)
        );
    }
}
