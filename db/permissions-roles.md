# Permission & ROLES (mariadb)
## Exercice
### Contexte

Créer deux utilisateurs un qui sera managé par des permission en dure, un qui sera managé par un rôle ayant accés à une seul table et l'autre accés à toutes les tables.
vous écrirez tout le code dans un fichier sql appelé **permission.sql**

- Tout deux doivent avoir une connexion en ed25519. (Bonus)
- Le compte qui est managé en dure doit pouvoir voir toutes les BDD mais ne pas pouvoir les selectionnés ou intéragir avec les tables.
- Le compte qui est managé par un role doit pouvoir accéder à une BDD qui sera celle de l'inscription et aura le droit d'accéder à la table users (l'utilisateur doit avoir le rôle associé par défaut).
- Le compte qui est managé par un role doit pouvoir accéder à toutes les BDD mais qui ne pourra intéragir seulement avec les tables de l'inscription (l'utilisateur doit avoir le rôle associé par
défaut).

Une fois finis vous devrez retirer tous les roles et droit aux différents utilisateurs;

- une fois réussi faire une petite démo

Une fois terminer refaire l'exercice et cette fois-ci ne donner que la permission d'insérer et de réucpérer les données.

- une fois réussi faire une petite démo