# Migration

Après chaque création de migration, vous devez migrer les tables.

## Exo 01

Créer une table photo. Cette table aura comme propriété suivante: - un id qui sera un entier, s'incremente - un nom pour identifer la photo qui sera un string, limité à 30 caractères - un path pour connaitre le chemin qui sera un string limité à 100 caractères

## Exo 02

Créer une table élève. Cette table aura comme propriété suivante: - un id qui sera un entier, s'incremente - un nom qui sera en string limité à 50 caractères - un prénom qui sera en string limité à 40 caractères - un email qui sera en format string limité à 50 caractères et peut etre null - une adresse qui sera en string limité à 200 caractères - une date de naissance qui sera en format date - une adresse IP qui sera en format ip

## Exo 03

Créer une table article. Cette table aura comme propriété suivante: - un id qui sera un entier, s'incremente - un nom qui sera un string qui sera limité à 100 caractères - un texte - une cote qui sera un chiffre à virgule



        créer la db sur phpmyadmin sans tables 

        connecter la db et le dossier dans le ficher env.

        (check ce qu'il faut mettre à la création)

        supprimez les trois migrations/models/cpntroller de bases.

        php artisan make:model Member -cm (création de model, controller et table)
        dans la migration, je peux rajouter des tables

        php artisan migrate

        pour update la table
            php artisan migrate:fresh
            attention! perte de contenu
