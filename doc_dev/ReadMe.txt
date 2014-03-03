Génération de la BDD: 

1) Configurer correctement le fichier dans /app/config/parameters.yml
2) Taper dans le terminal: php app/console doctrine:generate:entities Identite (Identite = nom du fichier)
3) Dans le terminal, taper la commande: php app/console doctrine:database:create
4) Pour remplir la vdd il faut faire: php app/console doctrine:schema:update --force 

Modifier le css : 

1) Faire les modifications dans le css qui se trouve à cette adresse: app/Resources/public/css/styles.css
2) Taper dans le terminal: php app/console asset:dump

