# PHP Kata Scaffolding

This is a scaffolding for Katas in PHP. 

## Setup

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
