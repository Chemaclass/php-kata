# PHP Kata Scaffolding

This is a basic scaffolding for Katas in PHP. 

## Setup

Either create your own repo using this one as template:
- https://github.com/Chemaclass/php-kata/generate

Or cloning the repo and apply your code directly there:
```
git clone https://github.com/Chemaclass/php-kata
```

### Some composer scripts

```bash
composer test      # run psalm & test-unit
composer psalm     # run Psalm coverage
composer test-unit # run phpunit
```

#### Extra

```bash
vendor/bin/psalm --clear-cache # clear the psalm cache ;)
```
