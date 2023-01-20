
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Xml Converter - convert from xml to array and viceversa
[![Latest Version on Packagist](https://img.shields.io/packagist/v/dmb/xml-converter.svg?style=flat-square)](https://packagist.org/packages/dmb/xml-converter)
---
A package that allows you to easily convert your XML string into array format or generate an XML string from an array. This package is based on: [Spatie Array to XML](https://github.com/spatie/array-to-xml) and [Gaarf XML string to PHP array](https://github.com/gaarf/XML-string-to-PHP-array).
---
<br>

## Installation

You can install the package via composer:

```bash
composer require dmb/xml-converter
```
<br>

## From Array to XML
<br>
Below some examples of use.
<br><br>

### Default root name: root

```php
$arrayConverted = (new FromArray())
    ->convertToXml($arrayToConvert);
```
<br>

### Custom root name: customRootName
```php
$arrayConverted = (new FromArray())
    ->convertToXml(
        $arrayToConvert,
        'customRootName'
    );
```
<br>

### Custom root name: customRootName and attributes
```php
$arrayConverted = (new FromArray())
    ->convertToXml(
        $arrayToConvert,
        [
        'rootElementName' => 'customRootName',
        '_attributes' => [
            'xmlns' => 'https://github.com/davidemariabusi/xml-converter',
        ],
    );
```
<br>

### Example with all features
```php
$arrayToConvert = [
    'First_User' => [
        '_attributes' => [
            'attr1' => 'value'
        ],
        'name' => 'Name',
    ],
    'Second_User' => [
        'name' => 'Name 2'
    ],
    'Third_User' => [
        '_attributes' => [
            'attr2' => 'value 2'
        ],
        '_value' => 'Name 3'
    ]
];

$arrayConverted = (new FromArray())
    ->convertToXml(
        $arrayToConvert,
        [
            'rootElementName' => 'customRootName',
            '_attributes' => [
                'xmlns' => 'https://github.com/davidemariabusi/xml-converter',
            ],
        ]
    );
```
### Result
```xml
<?xml version="1.0"?>
<customRootName xmlns="https://github.com/davidemariabusi/xml-converter">
    <First_User attr1="value">
        <name>Name</name>
        <weapon>Lightsaber</weapon>
    </First User>
    <Second_User>
        <name>Name2</name>
    </Second_User>
    <Third_User attr2="value 2">
        Name 3
    </Third_User>
</customRootName>
```
<br>

## From XML to Array
<br>
Below some examples of use.
<br><br>

### With valid XML

The xml will be converted to array.

```php
try {
    $converted = (new FromXml())
        ->convertToArray($validXml);
} catch (XmlParsingExcpetion $e) {
    $error = $e->getMessage();
}
```

### With invalid XML

An XmlParsingExcpetion will be caught.
```php
try {
    $converted = (new FromXml())
        ->convertToArray($invalidXML);
} catch (XmlParsingExcpetion $e) {
    $error = $e->getMessage();
}
```
<br>

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
<br><br>

## Credits

- [Davide Maria Busi](https://github.com/davidemariabusi)
- [Spatie Array to XML](https://github.com/spatie/array-to-xml)
- [Gaarf XML string to PHP array](https://github.com/gaarf/XML-string-to-PHP-array)
<br><br>


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
