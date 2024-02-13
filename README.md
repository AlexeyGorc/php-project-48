### Hexlet tests and linter status:
[![Actions Status](https://github.com/AlexeyGorc/php-project-48/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/AlexeyGorc/php-project-48/actions)
[![myCI](https://github.com/AlexeyGorc/php-project-48/actions/workflows/myCI.yml/badge.svg)](https://github.com/AlexeyGorc/php-project-48/actions/workflows/myCI.yml)   
[![Maintainability](https://api.codeclimate.com/v1/badges/909b4e06aef62b1e09bc/maintainability)](https://codeclimate.com/github/AlexeyGorc/php-project-48/maintainability)

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

---
### Comparing flat files
```sh
bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json
```

[![asciicast](https://asciinema.org/a/OFlBCY8OrxXZLt1zAcZIK0zsd.svg)](https://asciinema.org/a/OFlBCY8OrxXZLt1zAcZIK0zsd)

### Comparing yaml files
```sh
bin/gendiff tests/fixtures/file1.yaml tests/fixtures/file2.yaml
```

[![asciicast](https://asciinema.org/a/HbZ9o1YBJR7HvCREg58J7Rabo.svg)](https://asciinema.org/a/HbZ9o1YBJR7HvCREg58J7Rabo)

---

### Recursive comparison of json files with nested structured
- bin/gendiff tests/fixtures/file1_tree.json tests/fixtures/file2_tree.json

[![asciicast](https://asciinema.org/a/tmtlvQ3SjeLUxxakhKmqLbJf8.svg)](https://asciinema.org/a/tmtlvQ3SjeLUxxakhKmqLbJf8)

---

### Comparison output in flat format: