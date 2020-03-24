#eliminar

DELETE FROM trainers;
WHERE id = 5;

#eliminar todos los registros de una tabla
DELETE * FROM trainers

#vaciar tabla
TRUNCATE trainers;

# iniciar transacciones:
BEGIN;

DELETE FROM trainers
WHERE id > 2;

#los cambios son permanentes
#COMMIT


#devolver los cambios
ROLLBACK;
