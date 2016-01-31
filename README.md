# TimeZone\Constants

[![Build Status](https://travis-ci.org/guiwoda/timezone-constants.svg?branch=php-56)](https://travis-ci.org/guiwoda/timezone-constants)

All of PHP's timezone strings in handy constants. PHP 5.6 compatibility branch.

## Versions

| PHP version | branch                                                              | library version |
|-------------|---------------------------------------------------------------------|-----------------|
| 7.0+        | [master](https://github.com/guiwoda/timezone-constants/tree/master) | `^1.0`          |
| 5.6.*       | [php-56](https://github.com/guiwoda/timezone-constants/tree/php-56) | `^0.1`          |
| HHVM        | [php-56](https://github.com/guiwoda/timezone-constants/tree/php-56) | `^0.1`          |

## Usage

Require it through composer:

```
composer require datetime/constants:^0.1.0
```

Then use the constants wherever you need them:

```
$nowInBuenosAires = new \DateTime(
	'now', 
	new \DateTimeZone(\TimeZone\Constants::AMERICA_ARGENTINA_BUENOS_AIRES)
);
```