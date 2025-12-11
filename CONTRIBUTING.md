# Contribuer au projet

## Table des matières

- 🌲 [Roadmap](#roadmap)
- 🐤 [Prérequis](#prérequis)
- 🚀 [Installation](README.md#installation)
- 📦 [Base de Données](#Base-de-données)
- 🐈‍⬛ [Git et Github](#installation)
- 🏷️ [Gestion des versions](#gestion-des-versions)

## Roadmap

![Roadmap du projet](./roadmap.png)

## Prérequis

Il n'y en a pas vraiment! Il est recommandé d'avoir un peu d'expérience en informatique, de préférence en **[php](https://www.phptutorial.net/)** et avec le framework **[Laravel](https://www.w3schools.in/laravel)**, mais on peut tout à fait apprendre sur le tas!

## Installation

Il faut suivre les règles d'installation sur [page d'accueuil du projet!](README.md#installation)

## Base de données

On suit les conventions de nommage de [cet article](https://medium.com/@aliakbarhosseinzadeh/best-practices-for-sql-naming-conventions-tables-columns-keys-and-more-1d5e13853e39) en ce qui concerne les noms de tables et 
de colones dans la base de données

Le schéma de la base de données arrive très bientôt! 

## git et github

Pour régler un bug ou pour ajouter une fonctionnalité, il faut créer une branche à part puis faire un pull request.

Les commits devraient être courts et "atomiques" (avec un petit changement à la fois).

```powershell
$ git commit -m "court résumé de ce qui a changé
> 
> Un paragraphe décrivant ce qui a changé dans le code et son impact"
```

[Quelques règles de bonnes pratiques pour les commits](https://gist.github.com/luismts/495d982e8c5b1a0ced4a57cf3d93cf60)

[Court article explicatif de quelques flows de développements en branches](https://kevinsguides.com/guides/code/devops/file-mgmt/git-github-workflow-branch-merge/)

## Extensions VS code  recommandées 

[Database Client](https://open-vsx.org/vscode/item?itemName=cweijan.vscode-database-client2)

[PHP Intelephense](https://open-vsx.org/vscode/item?itemName=bmewburn.vscode-intelephense-client)

[Git Blame](https://open-vsx.org/vscode/item?itemName=waderyan.gitblame) | 
[Git Lens](https://open-vsx.org/vscode/item?itemName=eamodio.gitlens)

[Laravel](https://open-vsx.org/vscode/item?itemName=laravel.vscode-laravel) | 
[Laravel Goto Components](https://open-vsx.org/vscode/item?itemName=MrChetan.goto-laravel-components) | 
[Laravel Intellisense](https://open-vsx.org/vscode/item?itemName=mohamedbenhida.laravel-intellisense) | 
[Laravel Snippets](https://open-vsx.org/vscode/item?itemName=onecentlin.laravel5-snippets) 


## Gestion des versions

Afin de maintenir un cycle de publication claire et de favoriser la rétrocompatibilité, la dénomination des versions suit la spécification décrite par la [Gestion sémantique de version](https://semver.org/lang/fr/)

Les versions disponibles ainsi que les journaux décrivant les changements apportés sont disponibles depuis [la page des Releases](https://github.com/C2SU/qcmed-filament/releases).