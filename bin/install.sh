#!/bin/bash

# Script pour installer MyJSB, testé sous Ubuntu
# Ce script va télécharger Symfony, cloner le dépôt MyJSB
# et le configurer pour ajouter les fichiers manquants de Symfony
# et régler les droits utilisateur.

# Télécharger et décompresser Symfony:
wget http://get.symfony.com/Symfony_Standard_Vendors_2.4.2.tgz
tar -xvzf Symfony_Standard_Vendors_2.4.2.tgz

# Récupérer le dépôt de MyJSB
git clone git@myjsb.js:MyJSB

# Fichiers non présents dans MyJSB copiés dans Symfony
cp Symfony/app/config/parameters.yml MyJSB/app/config/parameters.yml
cp Symfony/web/app_dev.php MyJSB/web/app_dev.php
cp Symfony/app/bootstrap.php.cache MyJSB/app/bootstrap.php.cache
cp Symfony/web/bundles MyJSB/web/bundles

cp -pr Symfony/vendor MyJSB/vendor

# Droits d'accès en écriture pour le serveur web aux logs, cache:
sudo chown -R root:www-data MyJSB/app/cache
sudo chown -R root:www-data MyJSB/app/logs
sudo chown -R root:www-data MyJSB/app/config/parameters.yml
sudo chmod -R 775 MyJSB/app/cache
sudo chmod -R 775 MyJSB/app/logs
sudo chmod -R 775 MyJSB/app/config/parameters.yml

