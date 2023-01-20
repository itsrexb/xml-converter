<?php

declare(strict_types=1);

namespace Dmb\XmlConverter;

use Gaarf\XmlToPhp\Convertor;

class FromXml
{
    public function convertToArray(
        string $xmlToConvert
    ): array {
        return Convertor::covertToArray($xmlToConvert);
    }
}
