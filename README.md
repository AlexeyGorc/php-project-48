### Hexlet tests and linter status:
[![Actions Status](https://github.com/AlexeyGorc/php-project-48/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/AlexeyGorc/php-project-48/actions)
[![myCI](https://github.com/AlexeyGorc/php-project-48/actions/workflows/myCI.yml/badge.svg)](https://github.com/AlexeyGorc/php-project-48/actions/workflows/myCI.yml)   
[![Maintainability](https://api.codeclimate.com/v1/badges/909b4e06aef62b1e09bc/maintainability)](https://codeclimate.com/github/AlexeyGorc/php-project-48/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/909b4e06aef62b1e09bc/test_coverage)](https://codeclimate.com/github/AlexeyGorc/php-project-48/test_coverage)

## Description:

Difference Calculator is a program that determines the difference between two data structures.

## Features:

- Support for different input formats: yaml and json
- Generating a report in the form of plain text, stylish and json

## Requirements:

- PHP
- Composer
- make

## Install:
```sh 
git clone https://github.com/AlexeyGorc/php-project-48.git
```
```sh
cd php-project-48
```
```sh
make install
```

## Examples:

### Information
```sh
bin/gendiff -h
```
[![asciicast](https://asciinema.org/a/OJDJK56oS8mZl67hiumcicmdl.svg)](https://asciinema.org/a/OJDJK56oS8mZl67hiumcicmdl)

```sh
bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json
```

[![asciicast](https://asciinema.org/a/Il4dprEXU2Uj2zQsIBreExzLN.svg)](https://asciinema.org/a/Il4dprEXU2Uj2zQsIBreExzLN)

```sh
bin/gendiff tests/fixtures/file1.yaml tests/fixtures/file2.yaml
```

[![asciicast](https://asciinema.org/a/fsvDIvj20jCToBL6gKSeChsrV.svg)](https://asciinema.org/a/fsvDIvj20jCToBL6gKSeChsrV)

```sh
bin/gendiff --format plain tests/fixtures/file1.json tests/fixtures/file2.json
```

[![asciicast](https://asciinema.org/a/Ta3JkASHchP028Hx8MKIDTIz7.svg)](https://asciinema.org/a/Ta3JkASHchP028Hx8MKIDTIz7)

```sh
bin/gendiff --format json tests/fixtures/file1.json tests/fixtures/file2.json
```
[![asciicast](https://asciinema.org/a/MjVHbnqRjUCnUy7tCMsH7krr8.svg)](https://asciinema.org/a/MjVHbnqRjUCnUy7tCMsH7krr8)