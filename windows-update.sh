#!/bin/bash

composer install

php bin/console assets:install
php bin/console assetic:dump

taskkill /F /IM php-cgi.exe /T
