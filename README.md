# TimeZone\Constants

[![Build Status](https://travis-ci.org/guiwoda/timezone-constants.svg?branch=master)](https://travis-ci.org/guiwoda/timezone-constants)

All of PHP's timezone strings in handy constants. PHP7 compatible branch.

## Usage

Require it through composer:

```
composer require datetime/constants:^1.0
```

Then use the constants wherever you need them:

```
$nowInBuenosAires = new \DateTime(
	'now', 
	new \DateTimeZone(\TimeZone\Constants::AMERICA_ARGENTINA_BUENOS_AIRES)
);
```