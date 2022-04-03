Faker
=====

Faker is a PHP library that generates fake data for you, Faker is for you.

Faker requires PHP >= 5.3.3.

Faker is heavily inspired by Perl's [Data::Faker](http://search.cpan.org/~jasonk/Data-Faker-0.07/), and by ruby's [Faker](https://rubygems.org/gems/faker).

### INSTALLATION

```sh
$ composer require tal7aouy/faker
```

## Basic Usage

### Autoloading

```php
<?php
# Load Fakers own autoloader
require_one require __DIR__ . "/path/to/Faker/src/autoload.php";

```
## Create fake data

Usage is fairly straightforward:
--------------------------------

```php
echo \Faker\Name::name();    // "Lance Dickinson"
```


There are a few more to choose from:
------------------------------------

```php
// Datetime
\Faker\DateTime::timestamp();
\Faker\DateTime::date($format = null);
\Faker\DateTime::dateFormat();
\Faker\DateTime::time($format = null);
\Faker\DateTime::timeFormat();
\Faker\DateTime::dateTime($format = null);
\Faker\DateTime::dateTimeFormat();
\Faker\DateTime::month();
\Faker\DateTime::monthAbbr();
\Faker\DateTime::weekday();
\Faker\DateTime::weekdayAbbr();

// Address
\Faker\Address::address();
\Faker\Address::streetName();
\Faker\Address::streetAddress($includeSecondary = false);
\Faker\Address::city();
\Faker\Address::state();
\Faker\Address::stateAbbr();
\Faker\Address::zipCode();
\Faker\Address::zip();
\Faker\Address::postcode();
\Faker\Address::cityStateZip();
\Faker\Address::country();

// Name
\Faker\Company::name();
\Faker\Company::suffix();
\Faker\Company::catchPhrase();
\Faker\Company::bs();

// Geolocation
\Faker\Geo::point();
\Faker\Geo::latitude();
\Faker\Geo::longitude();
\Faker\Geo::pointDMS();
\Faker\Geo::latitudeDMS();
\Faker\Geo::longitudeDMS();

\Faker\Geo\BuenosAires::point();
\Faker\Geo\Chicago::latitude();
\Faker\Geo\Jakarta::longitude();
\Faker\Geo\London::pointDMS();
\Faker\Geo\LosAngeles::latitudeDMS();
\Faker\Geo\MexicoCity::longitudeDMS();

\Faker\Geo::point(\Faker\Geo\NewDelhi::bounds());
\Faker\Geo::latitude(\Faker\Geo\NewYork::bounds());
\Faker\Geo::longitude(\Faker\Geo\Paris::bounds());
\Faker\Geo::pointDMS(\Faker\Geo\Portland::bounds());
\Faker\Geo::latitudeDMS(\Faker\Geo\SanFrancisco::bounds());
\Faker\Geo::longitudeDMS(\Faker\Geo\SaoPaulo::bounds());

\Faker\Geo::point([[$swLat, $swLng], [$neLat, $neLng]]);
\Faker\Geo::latitude([$latMin, $latMax]);
\Faker\Geo::longitude([$lngMin, $lngMax]);
\Faker\Geo::pointDMS([[$swLat, $swLng], [$neLat, $neLng]]);
\Faker\Geo::latitudeDMS([$latMin, $latMax]);
\Faker\Geo::longitudeDMS([$lngMin, $lngMax]);

\Faker\Geo\BuenosAires::point();
\Faker\Geo\Chicago::point();
\Faker\Geo\Jakarta::point();
\Faker\Geo\London::point();
\Faker\Geo\LosAngeles::point();
\Faker\Geo\MexicoCity::point();
\Faker\Geo\NewDelhi::point();
\Faker\Geo\NewYork::point();
\Faker\Geo\Paris::point();
\Faker\Geo\Portland::point();
\Faker\Geo\SanFrancisco::point();
\Faker\Geo\SaoPaulo::point();
\Faker\Geo\Seoul::point();
\Faker\Geo\Tokyo::point();
\Faker\Geo\UnitedStates::point();

// Email & Internet
\Faker\Internet::email($name = null);
\Faker\Internet::freeEmail($name = null);
\Faker\Internet::safeEmail($name = null);
\Faker\Internet::userName($name = null);
\Faker\Internet::domainName();
\Faker\Internet::safeDomainName();
\Faker\Internet::domainWord();
\Faker\Internet::domainSuffix();
\Faker\Internet::ipv4Address();
\Faker\Internet::slug($str = null, $glue = array('.', '-', '_'));

// Words & Sentences
\Faker\Lorem::word();
\Faker\Lorem::words($num = 3);
\Faker\Lorem::sentence($wordCount = 4);
\Faker\Lorem::sentences($sentenceCount = 3);
\Faker\Lorem::paragraph($sentenceCount = 3);
\Faker\Lorem::paragraphs($paragraphCount = 3);


// PhoneNumber
\Faker\PhoneNumber::phoneNumber();
\Faker\PhoneNumber::safePhoneNumber();
```

### License

Faker is release under the Mit License.