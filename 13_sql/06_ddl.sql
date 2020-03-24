#modificar  tabla (agregar llave foranea)
ALTER TABLE pokemons
ADD FOREIGN KEY (trainer_id)
REFERENCES trainers(id);

#modificar tabla (renombrar columna)
ALTER TABLE trainers
CHANGE gym gym_id INT NOT NULL;

#crear tabla
CREATE TABLE gyms(
id INT AUTO_INCREMENT,
name VARCHAR(32) NOT NULL,
PRIMARY KEY (id)
);

ALTER TABLE trainers
ADD FOREIGN KEY (gym_id)
REFERENCES gyms(id);
