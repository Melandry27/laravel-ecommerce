# Suivi de progression

## Étape 2 : Implémenter les fonctionnalités de base

### Page d'accueil

- [ ] Ajouter une navbar dynamique avec les catégories principales (haut niveau).
- [ ] Créer une section "Produits mis en avant" avec 5 produits aléatoires activés.

### Page catégorie

- [ ] Vérifier si le slug dans l'URL correspond au slug de la catégorie et rediriger si nécessaire.
- [ ] Ajouter un fil d’ariane dynamique basé sur la hiérarchie des catégories.
- [ ] Afficher les catégories enfants sous la catégorie actuelle.
- [ ] Implémenter la pagination pour afficher les produits de la catégorie actuelle et ses sous-catégories.
- [ ] Filtrer pour n'afficher que les produits activés.

### Page produit

- [ ] Vérifier si le slug dans l'URL correspond au slug du produit et rediriger si nécessaire.
- [ ] Ajouter un fil d’ariane dynamique basé sur la hiérarchie des catégories du produit.
- [ ] Afficher toutes les informations du produit :
  - [ ] Titre
  - [ ] Description HTML
  - [ ] Prix
  - [ ] Photos (relation polymorphique)
- [ ] Renvoyer une erreur 404 si le produit est désactivé.
- [ ] Ajouter une section "Produits similaires" avec 5 produits aléatoires de la même catégorie.

---

## Étape 3 : Administration (CRUD)

### Gestion des catégories

- [ ] Ajouter, modifier, supprimer des catégories.
- [ ] Permettre de définir une catégorie parent.
- [ ] Générer automatiquement un slug basé sur le nom de la catégorie.

### Gestion des produits

- [ ] Ajouter, modifier, supprimer des produits.
- [ ] Associer un produit à plusieurs catégories.
- [ ] Générer automatiquement un slug basé sur le nom du produit.
- [ ] Permettre d’ajouter ou de supprimer des images pour un produit (relation polymorphique).

### Interface administrateur

- [ ] Ajouter une interface utilisateur simple avec Bootstrap ou Tailwind.
- [ ] Protéger l'accès à l'administration avec une authentification Laravel.

---

## Étape 4 : Tests et validations

- [ ] Tester toutes les redirections basées sur les slugs.
- [ ] Vérifier que seuls les produits activés sont affichés sur le site public.
- [ ] Tester la pagination sur la page des catégories.
- [ ] Valider que tous les liens du fil d’ariane fonctionnent correctement.
- [ ] Tester l'administration (CRUD) pour s'assurer que toutes les actions fonctionnent comme prévu.
