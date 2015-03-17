# TinyHttp
[![BuildStatus](https://travis-ci.org/eddiezane/TinyHttp.svg?branch=master)](https://travis-ci.org/eddiezane/TinyHttp)


TinyHttp is a very small HTTP wrapper written by [Neuman Vong](https://github.com/luciferous) and the fine folks over at [Twilio](https://twilio.com).
For more information of its purpose, see [this issue](https://github.com/twilio/twilio-php/issues/214).

## Install

Via Composer

``` bash
$ composer require eddiezane/tinyhttp
```

## Usage

``` php
$client = new \TinyHttp('http://api.giphy.com');
echo $client->get('/v1/gifs/random', null, array('api_key' => 'dc6zaTOxFJmzC'))->body;
```

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Todo
- Improve README usage
- Write tests

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Neuman Vong](https://github.com/luciferous)
- [Twilio](https://github.com/twilio/twilio-php/blob/master/Services/Twilio/TinyHttp.php)
- [All Contributors](../../contributors)

## License

The ISC License (BSD). Please see [License File](LICENSE.md) for more information.
