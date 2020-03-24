#consultar todos los registros
SELECT * FROM pokemons;

#consultar solo un campo
SELECT name FROM pokemons;

#consultar varios campos
SELECT name, speed FROM pokemons;

#consultar valores distintos
SELECT DISTINCT type FROM pokemons;

#consultar registros con caracteres especificos
SELECT *
FROM pokemons
WHERE type = 'Agua';

SELECT *
FROM pokemons
WHERE type = 'Agua' OR type = 'Electrico';

SELECT *
FROM pokemons
WHERE strength > 1000;

SELECT *
FROM pokemons
WHERE type <> 'Agua';

SELECT *
FROM pokemons
WHERE type = 'Agua' AND speed > 80;

SELECT *
FROM pokemons
WHERE stamina BETWEEN 200 AND 300;

#ordenar ascendente

SELECT * FROM pokemons ORDER BY strength;
SELECT * FROM pokemons ORDER BY strength ASC;

#ordenar descendente
SELECT * FROM pokemons ORDER BY strength DESC;

SELECT *
FROM pokemons
WHERE speed > 100
ORDER BY speed DESC;

#limite Y offset
SELECT *
FROM pokemons
LIMIT 10;

SELECT *
FROM pokemons
LIMIT 5 
OFFSET 10;

SELECT * FROM pokemons LIMIT 10,5;

#buscar
#mostrar resultados que inician con  la A
SELECT *
FROM pokemons
WHERE type
LIKE "A%";

#mostrar resultados que terminan con la L
SELECT *
FROM pokemons
WHERE type
LIKE "%L";

#mostrar resultados que contenga 'ma'
SELECT *
FROM pokemons
WHERE name
LIKE "%ma%";

#mostrar resultados que cumple 'pikachu'
SELECT *
FROM pokemons
WHERE name
LIKE "P_k_c_u";

#mostrar resultados que no contengan 'ma'
SELECT *
FROM pokemons
WHERE name
NOT LIKE "%ma%";

#mostrar resultados con varios valores 'IN'
SELECT *
FROM pokemons
WHERE type
IN ('Fuego', 'Electrico');

#mostrar resultados dentro de un rengo (BETWEEN)
SELECT *
FROM pokemons
WHERE speed
BETWEEN 90
AND 100;
----------------------------------------------------
SELECT t.name AS name_trainer,
	   p.name AS name_pokemon,
	   p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id;
ORDER BY t.name ASC ;
----------------------------------------------------
SELECT t.name AS name_trainer,
p.name AS name_pokemon,
p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id
AND p.type = "Agua" OR p.type = "Fuego"
ORDER BY t.name ASC;
----------------------------------------------------
SELECT COUNT(p.id) AS number_pokemons 
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
AND t.id = 1;
-----------------------------------------------------------
SELECT t.name AS name_trainer, COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id = p.trainer_id
GROUP BY t.name;
-----------------------------------------------------------
#inner join
#name_trainer | name_gym | name_pokemon

SELECT trainers.name, gyms.name, pokemons.name
FROM pokemons INNER JOIN trainers
ON pokemons.trainer_id = trainers.id
INNER JOIN gyms
ON trainers.gym_id = gyms.id
ORDER BY trainers.name;

# left join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym,
(pokemons.id) AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;

# right join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym,
pokemons.name AS name_pokemon
FROM trainers
RIGHT JOIN gyms
ON trainers.gym_id = gyms.id
RIGHT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.name;

# join 
SELECT trainers.name AS name_trainer, gyms.name AS name_gym,
pokemons.name AS name_pokemons
FROM trainers
JOIN gyms
ON trainers.gym_id = gyms.id AND trainers.id = 1
JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.name;

# Union
SELECT name FROM trainers
UNION 
SELECT name FROM gyms
UNION 
SELECT name FROM pokemons;

# vistas (views)
CREATE VIEW num_pokemons AS
SELECT trainers.name AS name_trainer , gyms.name AS name_gym,
pokemons.id AS num_pokemons
FROM trainers
LEFT JOIN gyms
ON trainers.gym_id = gyms.id
LEFT JOIN pokemons
ON pokemons.trainer_id = trainers.id
GROUP BY trainers.id;
--------------------------------------------------------------
#consultar vistas
SELECT * FROM num_pokemons;


