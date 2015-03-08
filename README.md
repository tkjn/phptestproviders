# PHP Test Providers

Useful providers for PHPUnit test cases

## Installation

Require in composer.json
```json
"require": {
    "tkjn/phptestproviders": "*"
}
```

## Usage

Use the corresponding trait inside of a TestCase class

```php
class MyTest extends \PHPUnit_Framework_TestCase
{
    use \Tkjn\TestProviders\IntegerTrait;
```

Then the providers in the trait can be use as PHPUnit data providers
```php
/**
 * @dataProvider notAnIntegerProvider
 */
public function testThrowsExceptionWhenNotAnInteger($value)
{

}
```
