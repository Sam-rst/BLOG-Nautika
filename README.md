# BLOG Nautika

## Description

Ce projet est un blog pour les fans de mangas / animés du monde francophone avec différentes pages. C'est un projet de cours qui demandait la collaboration entre les développeurs (avec GitHub) mais aussi avec l'équipe digitales qui proposaient différentes solutions pour améliorer l'image de la marque mais sa charte graphique avec ses différentes templates du site.

## Pré-requis

- PHP 8.2
- Composer 2.5.5
- Symfony 5.8
- NodeJS 10.1

## Installation du projet

Pour obtenir une copie locale et la faire fonctionner, suivez les étapes suivantes :

1. Clonez le projet avec la commande suivante :
   ```bash
   git clone https://github.com/Sam-rst/BLOG-Nautika.git
   ```

2. Dirigez-vous dans à la racine du projet dans un terminal
   ```bash
   cd BLOG-Nautika
   ```

3. Installer les dépendances Composer du fichier [./composer.json](./composer.json) en effectuant la commande suivante :
   ```bash
    composer install
   ```

4. Installer les dépendances Node du fichier [./package.json](./package.json) en effectuant la commande suivante :
   ```bash
    npm install
   ```

5. Build le projet avec la commande suivante :
   ```bash
    npm run build
   ```

Votre installation est maintenant terminée !

## Lancement du serveur avec Symfony

Pour lancer le serveur Symfony et faire fonctionner l'application, veuillez exécutez cette commande :
   ```bash
   symfony serve:start
   ```

## Effectuer des tests unitaires

1. Pour effectuer des tests unitaires sur des entités par exemple, il suffit de créer d'abord des entités avec la commande symfony :
   ```bash
   symfony console make:entity
   ```

2. Après cela, créer un test unitaire sur une entité avec la commande symfony suivante (devient obsolète) avec la nomenclature \<NomEntite>UnitTest:
   ```bash
   symfony console make:unit-test
   ```

3. Vous avez différents exemples de code dans le répertoire [./tests](./tests)

4. Pour effectuer les tests unitaires :
   ```bash
   php bin/phpunit --testdox
   ```
   Le ```--testdox``` vous permet d'avoir un meilleur affichage des résultats des tests