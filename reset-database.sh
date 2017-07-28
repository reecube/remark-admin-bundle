#!/bin/bash

php bin/console doctrine:schema:validate

php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
