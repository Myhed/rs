# ADMINISTRATION BDD

## Palier 1

> Créer une BDD dans laquelle les produits auront un nom, un fabricant, un prix, une image, une description. Les utilisateurs auront un nom, un prénom, une adresse, email, un mot de passe et une adresse(code postal, ville, rue). Ajouter une partie commentaire, ou les utilisateurs du site peuvent écrire un commentaire sur un produit.

## Coeur du système

> Intégrer un système de panier avec une validation d'achats (on doit savoir quel utilsateur a acheté quelle produit). Plus l'utilisateur achète de produit et plus il gagnera de point qui a un certain niveau lui donneront des remises sur son prochain achat. (Exemple: 1 objet acheté vaut 10 points. Au bout de 100 points, il y'a une remise de 10% sur le prochain achat uniquement). chaque produit a une certaine quantité disponible ! si la quantité deviens 0 alors le produit doit être marqué indisponible.

## Phase de modélisation

- Création d'un MCD/MLD puis passer au MPD.

- Une fois au MPD, remplir toutes vos tables de données environs jusqu'a 30 insertions par table.

- Découper votre code le plus possible en fonction quand cela est possible, afin de pouvoir les utilisés dans vos procédures respectives.

## Les procédures principale
Voici quelques fonctionnalités que je peux vous proposer d'implémanter bien évidemment cette liste peut être augmenter selon votre besoin n'hésiter donc pas à rajouter des procédures qui vous semblerais plus pertinante/nécéssaire pour la réalisation de ce TP.

- **registerUser**
- **registeredUser**
- **AddPanier**
- **deletePanier**
- **updatePanier**
- **addProduct**
- **updateProduct**
- **addCommentOnProduct**
- **deleteCommentOnProduct**
- **getProducts**
- **getCommentsProduct**
- **getCommentsProducts**
- **getCommentsUser**
- **getCommentsProductSortedByDate**
- **getCommentsUsersSortedByDate**
- **getCommentsProductByUserSortedByDate**
- **getCommentsUserByProduct**
- **getCurrentPurchasesProducts**
- **getPurchasesProductsByUser**
- **getPurchasesProductsSortedByDate**
- **getPurchasesProductsByUserSortedByDate**

## BackEnd (BONUS)

> Une fois que vous avez finis le coeur de votre système et que toutes vos procédures et fonctions sont fonctionnelles vous pouvez essayez de tenter maintenant de racorder un backend à votre BDD et utiliser les différentes procédures pour chaque fonctionnalité demander.

***/!\ Aucun language/framework vous seras imposer vous serez libre de tester pour de la R&D un nouveau language dont vous souhaitez apprendre ou à l'inverse prendre un language que vous connaissez bien***

# Front (BONUS)

> Créer un site de vente en-ligne aucun thème ne vous sera imposer. Le système comportera un système de connexion en tant qu'utilisateur. A l'accueil, le site présentera une vitrine des produits: une image du produit, le nom et le prix. Les produits auront chacun une page avec le nom du produit, le fabricant, le prix, une image et une description. les utilisateurs auront une partie profil avec possibilité de changer leur adresse email et leur mot de passe.