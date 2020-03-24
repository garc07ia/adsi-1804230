#Acceder a base de datos (Mysql) local en el navegador
#http://localhost/phpmyadmin

#Acceder a base de datos en la linea de comandos
#cd ../ ../
#ingresar hasta el directorio
#cd xampp/ cd mysql/ cd bin/
#version mysql
#mysql --version
#iniciarlo
#mysql -u root 

#mostrar version de Mysql
SELECT version();

#consultar lista de base de datos
SHOW databases;

#crear una base de datos
CREATE DATABASE adsi1804230;

#conectar a una base de datos 
CONNECT mysql;

#usar base de satos
USE adsi1804230;

#mostrar tablas
SHOW tables;

#crear tabla
CREATE table pokemons (
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> type VARCHAR(32) NOT NULL,
    -> strength INT NOT NULL,
    -> stamina INT NOT NULL,
    -> speed INT NOT NULL,
    -> accuracy INT NOT NULL,
    -> PRIMARY KEY(id)
    );

 CREATE TABLE trainers(
    -> id int AUTO_INCREMENT,
    -> name varchar(32) NOT NULL,
    -> level int NOT NULL,
    -> gym varchar(32) NOT NULL,
    -> primary key(id)
    );

  CREATE TABLE types(
    -> id INT AUTO_INCREMENT,
    -> name VARCHAR(32) NOT NULL,
    -> PRIMARY KEY(id));


#agregar columna
 ALTER TABLE pokemons ADD COLUMN trainer_id INT NOT NULL AFTER accuracy;


 #eliminar columna
 ALTER TABLE pokemons DROP COLUMN trainer_id;


#descripcion de la tabla
DESCRIBE pokemons;

#insertar registro en la tabla
INSERT INTO pokemons VALUES (DEFAULT, 'Pikachu', 'Electrico', 90, 80, 96, 79);
INSERT INTO pokemons VALUES (DEFAULT, 'Charmander', 'Fuego', 95, 78, 80, 82);
INSERT INTO pokemons VALUES (DEFAULT, 'Bulbasaur', 'Planta', 80, 88, 70, 75);
INSERT INTO pokemons VALUES (DEFAULT, 'Squirtle', 'Agua', 70, 90, 75, 90);
INSERT INTO pokemons VALUES (DEFAULT, 'Snorlax', 'Normal', 180, 320, 50, 180);
INSERT INTO pokemons VALUES (DEFAULT, 'Vaporeon', 'Agua', 186, 260, 90, 168);
INSERT INTO pokemons VALUES (DEFAULT, 'Lapras', 'Agua', 111, 255, 100, 168);
INSERT INTO pokemons VALUES (DEFAULT, 'Blastoise', 'Agua', 720, 158, 70, 222);
INSERT INTO pokemons VALUES (DEFAULT, 'Golem', 'Roca', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Dragonite', 'Dragon', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Exeggutor', 'Planta', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Omaster', 'Roca', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Muk', 'Veneno', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Onix', 'Roca', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Poliwag', 'Agua', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Mankey', 'Pelea', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Magnemite', 'Electrico', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Pidgey', 'Normal', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Gastly', 'Fantasma', 90, 80, 96, 70);
INSERT INTO pokemons VALUES (DEFAULT, 'Rattata', 'Normal', 90, 80, 96, 70);



INSERT INTO trainers VALUES( DEFAULT, "Ash Ketchup", 7, "Paleta");
INSERT INTO trainers VALUES (DEFAULT, "Misty", 4, "Estrella");
INSERT INTO trainers VALUES (DEFAULT, "Brok",6, "Tierra");
INSERT INTO trainers (id, name, level, gym) VALUES(DEFAULT, "Serena", 4, "Diamante");
INSERT INTO trainers (id, name, level, gym) VALUES(DEFAULT, "Oak", 9, "Escuela");


INSERT INTO gyms VALUES( DEFAULT, "Ciudad Paleta");
INSERT INTO gyms VALUES( DEFAULT, "Ciudad Fucsia");
INSERT INTO gyms VALUES (DEFAULT, "Ciudad Celeste");
INSERT INTO gyms VALUES (DEFAULT, "Ciudad Azulona");
INSERT INTO gyms VALUES (DEFAULT, "Ciudad Olivo");

#crear copia de seguridad (Backup) de la BD:
mysqldump -u root -p adsi1804230 > "C:\Users\vales\Desktop\Valentina G\adsi-1804230\13_sql\backup.sql"
#eliminar BD
DROP DATABASE adsi1804230;

#recuperar copia de seguridad (Backup) de la BD
mysql -u root -p adsi1804230 < "C:\Users\vales\Desktop\Valentina G\adsi-1804230\13_sql\backup.sql"

# Insertar datos de una tabla a otra

#
UPDATE pokemons SET trainer_id = 1 WHERE id = 1 OR id = 2 OR id = 3 OR = 4;
UPDATE pokemons SET trainer_id = 2 WHERE id = 5 OR id = 7 OR id = 9 OR id = 11 OR id = 13 OR id = 15 OR ID = 17 OR id = 19;
UPDATE pokemons SET trainer_id = 3 WHERE id = 6 OR id = 8 OR id = 10 OR id = 12 OR id = 14 OR id = 16 OR ID = 18 OR id =20;
UPDATE pokemons SET trainer_id = 4 WHERE id = 5 OR id = 7 OR id = 9 OR id = 11 OR id = 13 OR id = 15 OR ID = 17 OR id = 19;
UPDATE pokemons SET trainer_id = 5 WHERE id = 6 OR id = 8 OR id = 10 OR id = 12 OR id = 14 OR id = 16 OR ID = 18 OR id =20;






