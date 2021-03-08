# PHP Kata Scaffolding

This is a scaffolding for Katas in PHP. 

## Setup

Either create your own repo using this one as template:
- https://github.com/Chemaclass/php-kata/generate

Or cloning the repo and apply your code directly there:
```
git clone https://github.com/Chemaclass/php-kata
```

### Some composer scripts

```bash
composer test-all     # run test-quality & test-unit
composer test-quality # run csrun & psalm
composer test-unit    # run phpunit

composer csrun  # check code style
composer psalm  # run Psalm coverage
```

#### Extra

```bash
vendor/bin/psalm --clear-cache # clear the psalm cache ;)
```
