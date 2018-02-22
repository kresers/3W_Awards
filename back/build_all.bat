@echo off
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixture:load
rem Tout d'abord "rem" en bash veut dire commentaire ...
rem J'ai comment� la commande ci_dessous car elle n�cessite un lancement en mode adminsitrateur
rem php bin/console asset:install --symlink
pause