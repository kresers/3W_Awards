@echo off
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixture:load --append

