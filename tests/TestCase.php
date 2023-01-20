<?php

namespace Dmb\XmlConverter\Tests;

use Dmb\XmlConverter\Tests\Assets\ArrayExample;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public const PARSING_XML_ERROR = 'Parsing error: it seems that the xml file is invalid, please check and try again';

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getValidXml(): string
    {
        return file_get_contents(__DIR__ . '/assets/xml-example.xml');
    }

    protected function getInvalidXml(): string
    {
        return file_get_contents(__DIR__ . '/assets/xml-invalid-example.xml');
    }

    protected function expectedArray(): array
    {
        return (new ArrayExample())->get();
    }
}
