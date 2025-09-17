# Test technique — Dev Front

## Objectif
Reproduire fidèlement l’interface fournie (**Adobe XD**) **au pixel près**.  
En cas d’incohérence visuelle, ajustez pour obtenir une **vue harmonisée** (alignements, hiérarchie visuelle, rythme vertical) et **documentez** vos arbitrages dans le README (section « Notes de design »).

🔗 **Maquettes** : https://xd.adobe.com/view/47f5bba9-a512-492c-85c6-d4fc4ddebc60-12a6/

---

## Stack & périmètre
- Réaliser les pages **en HTML et Tailwind CSS uniquement** (Tailwind est **déjà installé**).
- **Aucune autre dépendance** ne devra être installée.
- Ces pages sont **statiques** : **aucun besoin de base de données**.

---

## Modalités de dépôt
- Travaillez **uniquement sur un fork GitHub** de notre dépôt.
- **Aucune branche** ne devra être créée : utilisez la **branche principale** de votre fork.

---

## Routing requis (personnalisé par candidat)
Les URL doivent être personnalisées par candidat selon le format :  
`/{nom-de-famille}-{slug-de-la-page}`

**Règles :**
- **nom-de-famille** : en minuscules, accents supprimés, espaces → « - ».  
  *Ex.* « Dupré-Lefèvre » → `dupre-lefevre`.
- **slug-de-la-page** : en minuscules, accents supprimés, espaces → « - » ; caractères autorisés : `a–z`, `0–9`, `-`.  
  Utiliser **un seul tiret** entre les segments ; **aucun tiret** en début/fin.

**Exemple avec le candidat *Dumoulin Adrien***
- Page 1 : `/dumoulin-completez-votre-reservation`
- Page 2 : `/dumoulin-paiement`

---

## Livrables attendus
- Lien GitHub de votre **fork public** (historique de commits propre et régulier).
- **README** à la racine incluant :
    - **Instructions de lancement/build** si différentes du projet de base.
    - Section **« Notes de design »** : incohérences rencontrées, arbitrages, fallback de police si nécessaire.
- *(Optionnel)* **Captures comparatives** montrant vos vérifications de pixel perfect.
- **Temps passé** (indicatif).

# santatramcd/rec-0925-devfront

## Lien GitHub (fork public)
https://github.com/santatramcd/rec-0925-devfront

---

## Instructions de lancement / build
Si le projet est différent du projet de base, voici les étapes pour le lancer :  

1. Cloner le dépôt :
   ```bash
   git clone https://github.com/santatramcd/rec-0925-devfront.git

Aller dans le dossier :

cd rec-0925-devfront
**Installer les dépendances** :
npm install et composer install pour Laravel

**Lancer le projet** :
npm run dev et php artisan serve pour Laravel

## Notes de design
Incohérences rencontrées : certaines marges et alignements sur mobile.

Arbitrages réalisés : j’ai utilisé Tailwind pour harmoniser la mise en page.


## Temps passé
Environ 6 heures