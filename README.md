# PetitYogi 🧘 | Projet Symfony5 | Formation WAD-19 Interface3

**récupérer la db et les datas du projet**

- Récupérer la database via doctrine 

> `php bin/console doctrine:database:create`

- Utiliser le load (ou non)

> `php bin/console doctrine:fixtures:load`

**Demo Paypal**

- Faire un paiement _Paypal_ via SmartButton :

*Utiliser ce faux compte Client*
email: `sb-voq43c1529909@personal.example.com`

password: `3=)<zNU/`


- Vérifier la transaction test :

Se connecter sur [sandbox](https://www.sandbox.paypal.com/) 
email: `sb-5f5ec1529902@personal.example.com`
password: `HFt59?>h`

**Done**

- Register/Inscription ✅
- Login/Connexion ✅
- CRUD Membre dans la session connecté ✅ (Sauf Update)
- Paiement Paypal avec SmartButton ✅ (non relié à l'entité User)

**ToDo**

- Créer une vue Compte + contenu Premium après abonnement
- Dans session user, lui donner la possibilité de modifier son compte
- Revoir le responsive

**Apperçu**

<img width="1273" alt="Capture d’écran 2020-04-22 à 16 34 01" src="https://user-images.githubusercontent.com/45564137/79995142-2140d500-84b7-11ea-8d5d-61dc7e8e0aec.png">