#!/bin/bash

composer install

php bin/console assets:install

taskkill -F -IM php-cgi.exe -T
