# PHP Scaffolding

[![MIT Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.md)

This is a scaffolding for PHP projects using Docker. 

In this repository you will find:

* Latest `PHP` ([8.0](https://en.wikipedia.org/wiki/PHP#Release_history)) ← the language
* Latest `Composer` (currently [2.0](https://getcomposer.org/)) ← the package manager
* Latest `PHPUnit` (currently [9](https://phpunit.de/announcements/phpunit-9.html)) ← the tester 
* Latest `XDebug` (currently [3](https://xdebug.org/docs/)) ← the debugger
* Latest `Psalm` (currently [4](https://github.com/vimeo/psalm)) ← the static analysis tool
* Basic `Dockerfile` ready to use from your `docker-compose.yml` ← the foundation
* Basic structure ready to start coding in `src` and `tests` ← your logic; your design

## Setup

```bash
curl -sS https://raw.githubusercontent.com/Chemaclass/php-kata-scaffolding/master/setup.sh > setup.sh
bash setup.sh YourNewProjectName
rm setup.sh
```

### Getting the bash from your project

```bash
docker exec -ti -u dev your_project_name bash
```

## Some composer scripts

```bash
composer test-all     # run test-quality & test-unit
composer test-quality # run csrun & psalm
composer test-unit    # run phpunit

composer csrun  # check code style
composer psalm  # run Psalm coverage
```

## Git hooks

* `./tools/scripts/git-hooks/pre-commit.sh`
* `./tools/scripts/git-hooks/pre-push.sh`

```bash
ln -s tools/scripts/git-hooks/pre-commit.sh .git/hooks/pre-commit
ln -s tools/scripts/git-hooks/pre-push.sh .git/hooks/pre-push
```

## Contributions

Installing this repository locally

```bash
docker-compose up -d
docker-compose exec php-kata-scaffolding composer install
docker-compose exec -u dev php-kata-scaffolding composer test-all
docker exec -ti -u dev php-kata-scaffolding bash
```

Feel free to open any PR with your ideas, suggestions or improvements.

Or contact me directly via [Twitter](https://twitter.com/Chemaclass).
