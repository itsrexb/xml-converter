<?php

declare(strict_types=1);

namespace Dmb\XmlConverter;

use Spatie\ArrayToXml\ArrayToXml;

class FromArray
{
    /**
     *
     * @param array $arrayToConvert
     * @param string|array|null $rootElementName
     * @return string
     */
    public function convertToXml(
        $arrayToConvert,
        $rootElementName = null
    ): string {
        return ArrayToXml::convert(
            $arrayToConvert,
            $rootElementName,
            false
        );
    }
}
