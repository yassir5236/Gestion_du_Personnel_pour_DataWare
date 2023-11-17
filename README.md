# Gestion_du_Personnel_pour_DataWare

Lisez-moi
Description
Ce référentiel contient des scripts PHP qui extraient et affichent des données à partir d'une base de données MySQL. Les données sont présentées sous forme de tableau avec une mise en forme Bootstrap.

# Fichiers


 index.php

Fichier HTML principal avec des liens vers deux tables différentes : "Tableau Personnel" et "Tableau Équipes".
personnel.php

Script PHP pour extraire et afficher des données de la table "Personnel" dans la base de données MySQL.
Les colonnes du tableau incluent Personnel_ID, Personnel_Nom, Personnel_Prénom, Personnel_Email, Personnel_Téléphone, Personnel_Role, Personnel_Statuts, et Personnel_Equipe.
hello.php

Script PHP pour extraire et afficher des données de la table "équipes" dans la base de données MySQL.
Les colonnes du tableau incluent Équipes_ID, Équipe_Nom, et Création_Équipe.
Connexion à la base de données

Les paramètres de connexion à la base de données (nom du serveur, utilisateur, mot de passe, base de données) sont définis au début de chaque script PHP.
Bootstrap

Bootstrap version  est utilisé pour la mise en forme. Le CSS est inclus via un lien CDN dans l'en-tête HTML.
Configuration de la base de données
Assurez-vous d'avoir une base de données MySQL nommée "mydata" avec les tables appropriées ("Personnel" et "équipes") et les noms de colonnes tels que mentionnés dans les scripts PHP. Mettez à jour les paramètres de connexion à la base de données dans chaque script si nécessaire.

# lien vers Le fichier des diagrammes UML.
https://lucid.app/lucidchart/0e12b5c3-ffef-4b7d-b211-6b8eb1b9e4f5/edit?viewport_loc=-4586%2C-2821%2C7776%2C3224%2C0_0&invitationId=inv_8ada8bb5-2f6f-4e09-b5c7-6c36c6461575