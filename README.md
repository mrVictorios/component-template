# Component Template

A small project template. With pre configured Code Quality Tools.

Pre Configured Tools:

* PHPUnit - Unit testing Framework
* PHPDox - Documentation
* PHPMetrics - Project Metrics
* Docker Environment

## Usage
```bash
$ composer create-project manrog/php-template %PROJECT_NAME%
```

### Create Docker Container
```bash
$ docker-compose up
```

### Connect to Docker bash
```bash
$ docker exec -ti %CONTAINER_NAME% /bin/bash
```

## FAQ
1. PHPMetrics not Generate images, get save you have "graphviz" installed.
do