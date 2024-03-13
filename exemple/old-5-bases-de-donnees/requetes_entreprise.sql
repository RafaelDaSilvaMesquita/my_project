-- requetes_entreprise.sql


SHOW DATABASES; 
-- permet de voir les BDD sur le serveur. 

CREATE DATABASE entreprise; 
-- Permet de créer une BDD

DROP DATABASE entreprise; 
-- Supprime la BDD

USE entreprise;
-- permet de se connecter à une BDD en particulier. 

-----------------
-- REQUETE SELECT
-----------------

-- Récupérer toutes les infos de la table employes

SELECT id_employes, prenom, nom, service, sexe, date_embauche, salaire 
FROM employes; 

-- la même chose en raccourci ! 
SELECT * FROM employes; 

-- ON récupère tous les noms et prénoms
SELECT prenom, nom FROM employes;

-- Je souhaite récupérer la liste de tous les services de l'entreprise

SELECT DISTINCT service FROM employes;
-- DISTINCT permet de retirer les doublons


--Quels sont les employés du service commercial

SELECT prenom, nom, service 
FROM employes 
WHERE service = 'commercial'; 

-- WHERE : à condition sur attribut = 'valeur'

-- Je souhaite récupérer les employés embauchés entre 2010 et aujourd'hui. 

SELECT prenom, nom, date_embauche FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2018-07-02';

SELECT prenom, nom, date_embauche FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND CURDATE();

-- BETWEEN... AND... permet de définir un interval. 
-- Les dates s'écrivent sous forme d'une chaîne de caractères '2018-07-02'
-- CURDATE() est une fonction SQL qui retourne la date du jour
-- NOW() est une fonction SQL qui retourne la date du jour, et l'heure/minute/seconde de l'instant

-- Je souhaite récupérer tous les employés dont le prénom commence par 'S';
SELECT prenom FROM employes WHERE prenom LIKE 's%';

-- Je souhaite récupérer tous les employés dont le prénom fini par 'S';
SELECT prenom FROM employes WHERE prenom LIKE '%s';

-- Je souhaite récupérer tous les employés dont le prénom est composé;
SELECT prenom FROM employes WHERE prenom LIKE '%-%';

-- LIKE permet de faire une requête sur une valeur approximative. 
-- '%' : peu importe ce qui précède/suit


-- Je souhaite récupérer tous les employes sauf ceux du service commercial. 

SELECT prenom, nom, service FROM employes WHERE service != 'commercial';

SELECT prenom, nom, service FROM employes WHERE service <> 'commercial';


-- Tous les employés dont le salaire est supérieur à 2500
SELECT prenom, nom, salaire FROM employes WHERE salaire >= 2500;


-- Les employés par ordre alphabétique des prénoms

SELECT prenom FROM employes ORDER BY prenom ASC; 
-- ORDER BY permet d'ordonner les résultats.. par default ASC (croissant, ordre alpha, chronologique)
-- DESC (décroissant, anté-alph, anti-chronologique)


SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 0,3;
SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 3,3;
SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 6,3;

-- LIMIT permet de limiter le nombre de résultats. Le premier chiffre définie le point de départ, et le second le nombre de résultats à afficher. 

-- Je souhaite connaître le salaire annuel de chaque employé : 

SELECT prenom, nom, salaire*12 FROM employes; 

SELECT prenom, nom, salaire*12 AS 'salaire_annuel' FROM employes; 

-- On peut effectuer des calculs dans la requête. 
-- AS permet de définir un alias

-- Je souhaite la masse de l'entreprise
SELECT SUM(salaire*12) as 'masse_salariale' FROM employes; 
-- SUM() est une fonction qui permet de calculer la somme des valeurs d'un champs numérique. 

SELECT SUM(salaire*12) as 'masse_salariale_informatique' FROM employes WHERE service = 'informatique';


------
-- Je souhaite le salaire moyen des commerciaux : 
SELECT AVG(salaire) FROM employes WHERE service = 'commercial';

SELECT ROUND(AVG(salaire), 2) FROM employes WHERE service = 'commercial';

-- Je souhaite connaître le nombre de femmes dans l'entreprise : 

SELECT COUNT(*) FROM employes WHERE sexe = 'f';

-- COUNT() permet de compter le nombre de résultats à une requête. Il effectue un SELECT de ce qu'il y a dans les parenthèses puis compte... 

-- Je souhaite connaître le plus petit salaire
SELECT salaire FROM employes ORDER BY salaire ASC LIMIT 0,1;

SELECT MIN(salaire) FROM employes;

-- Je souhaite connaître le plus petit salaire
SELECT salaire FROM employes ORDER BY salaire DESC LIMIT 0,1;

SELECT MAX(salaire) FROM employes;

-- Quel est le prénom de la personne qui gagne le plus petit salaire ??? 


SELECT prenom, MIN(salaire) FROM employes;
-- ERREUR, cela retourne Jean-Pierre, SQL ne comprend la requête. 

SELECT prenom, salaire FROM employes ORDER BY salaire ASC LIMIT 0, 1;
-- OK : PB de performance

SELECT prenom, salaire 
FROM employes 
WHERE salaire = (
	SELECT MIN(salaire) FROM employes);
 
-- Meilleure solution : la requête imbriquée. La valeur est inconnue, on va donc la récupérer à travers une requête dans une requête. 

-- Je veux les employes des service comptabilité et informatique. 

SELECT prenom, nom, service
FROM employes 
WHERE service = 'comptabilite'
OR service = 'informatique';

-- Je veux les commerciaux qui gagnent  moins de 2500 

SELECT prenom, nom, service, salaire
FROM employes 
WHERE service = 'commercial'
AND salaire <= 2500; 

-- Je veux les employes des service comptabilité et informatique. 
SELECT prenom, nom, service FROM employes WHERE service IN ('informatique', 'comptabilite');


-- Je veux tous les employes sauf ceux de la compta et de l'informatique
SELECT prenom, nom, service FROM employes WHERE service NOT IN ('informatique', 'comptabilite');

-- Je souhaite connaître les prénoms des employés qui travaillent pour le service commercial et qui gagnent soit 1800 soit 1500. 

SELECT prenom, nom, salaire, service 
FROM employes 
WHERE service = 'commercial' 
AND (salaire = '1800' OR salaire = 1500);

SELECT prenom, nom
FROM employes
WHERE service = 'commercial'
AND salaire IN (1500, 1800);

-------
-- Le nombre d'employés du service informatique
SELECT service, COUNT(*) FROM employes WHERE service = 'informatique';

-- Je veux le nombre d'employés par service. 

SELECT service, COUNT(*) FROM employes GROUP BY service;
-- GROUP BY permet d'effectuer des regroupements. 

SELECT service, COUNT(*) FROM employes WHERE sexe = 'f' GROUP BY service; 

SELECT service, COUNT(*) FROM employes GROUP BY service HAVING COUNT(*) > 2; 

-- GROUP BY s'utilise en fin de requête après les conditions (comme ORDER BY).

------------------
-- REQUETE INSERT
------------------
INSERT INTO employes (prenom, nom, sexe, date_embauche, salaire) VALUES ('Yakine', 'HAMIDA', 'Informatique', 'm', CURDATE(), 5001);

INSERT INTO employes VALUES (992, 'Yakine', 'HAMIDA', 'Informatique', 'm', CURDATE(), 5001);

----------------------------
-- Requête UPDATE ou REPLACE
----------------------------

UPDATE employes
SET salaire = 1850 
WHERE prenom = 'JuLiEn';

UPDATE employes 
SET salaire = 1850
WHERE id_employes = 780;

UPDATE employes
SET service = 'commercial', salaire = 2200
WHERE id_employes = 739;  

--- REPLACE 
REPLACE INTO employes (id_employes, prenom, nom, sexe, date_embauche, salaire) VALUES (991, 'Hamady', 'HAMIDA', 'Informatique', 'm', CURDATE(), 5001);
-- REPLACE se comporte comme INSERT s'il n'y a pas de clé primaire (id_employes) précisée. 
-- REPLACE supprime la ligne pour la re-créer dans le même millième de seconde. Donc cela implique que l'on doive renseigner tous les attributs. 

------------------------------
--REQUETE DELETE (suppression)
------------------------------
DELETE FROM employes WHERE id_employes = 350; 
-- DELETE FROM employes; (vide la table)
-- TRUNCATE TABLE employes; (vide la table)
-- DROP TABLE employes; (supprime la table)

DELETE FROM employes WHERE service = "commercial";



----------------------
-- EXERCICES : 
----------------------

-- 1 -- Afficher la profession de l'employé 547.	
SELECT service FROM employes WHERE id_employes = 547; 


-- 2 -- Afficher la date d'embauche d'Amandine.
SELECT date_embauche FROM employes WHERE prenom = 'Amandine';


-- 3 -- Afficher le nom de famille de Guillaume
SELECT nom FROM employes WHERE prenom = 'Guillaume';

-- 4 -- Afficher le nombre de personne ayant un n° id_employes commençant par le chiffre 5.	
SELECT COUNT(*) FROM employes WHERE id_employes LIKE '5%'; 


-- 5 -- Afficher le nombre de commerciaux.
SELECT COUNT(*) FROM employes WHERE service = 'commercial';

		
-- 6 -- Afficher le salaire moyen des informaticiens (+arrondie).	
SELECT ROUND(AVG(salaire), 2) FROM employes WHERE service = 'informatique';

-- 7 -- Afficher les 5 premiers employés après avoir classer leur nom de famille par ordre alphabétique.
SELECT nom FROM employes ORDER BY nom ASC LIMIT 0,5; 
	
-- 8 -- Afficher le coût des commerciaux sur 1 année.
SELECT SUM(salaire*12) FROM employes WHERE service = 'commercial';

-- 9 -- Afficher le salaire moyen par service. (service + salaire moyen)	
SELECT service, ROUND(AVG(salaire), 2) FROM employes GROUP BY service; 

-- 10 -- Afficher le nombre de recrutement sur l'année 2010 (+alias).	
SELECT COUNT(*) as 'recrutement_2010' FROM employes WHERE date_embauche LIKE '2010%';

SELECT COUNT(*) as 'recrutement_2010' FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';

SELECT COUNT(*) as 'recrutement_2010' FROM employes WHERE
date_embauche >= '2010-01-01' AND date_embauche <= '2010-12-31';


-- 11 -- Afficher le salaire moyen appliqué lors des recrutements sur la période allant de 2005 a 2007
-- 12 -- Afficher le nombre de services différents
-- 13 -- Afficher tous les employés (sauf ceux du service production et secrétariat)
-- 14 -- Afficher conjoitement le nombre d'homme et de femme dans l'entreprise
-- 15 -- Afficher les commerciaux ayant été recrutés avant 2005 de sexe masculin et gagnant un salaire supérieur a 2500 €
-- 16 -- Qui a été embauché en dernier
-- 17 -- Afficher les informations sur l'employé du service commercial gagnant le salaire le plus élevé
-- 18 -- Afficher le prénom du comptable gagnant le meilleur salaire
-- 19 -- Afficher le prénom de l'informaticien ayant été recruté en premier
-- 20 -- Augmenter chaque employé de 100 €
-- 21 -- Supprimer les employés du service secrétariat
		







