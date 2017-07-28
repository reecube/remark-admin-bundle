#!/bin/bash

git pull

php ../composer/composer.phar install

php bin/console cache:clear --env=prod
php bin/console assets:install --symlink --env=prod
php bin/console assetic:dump
