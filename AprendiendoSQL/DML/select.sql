#MOSTRAR TODOS LOS REGISTROS DE UNA TABLA#

SELECT * FROM usuarios;

#MOSTRAR REGISTROS O CAMPOS ESPECIFICOS DE UNA TABLA
SELECT email, nombre, apellidos FROM usuarios;

#OPERADORES ARICMETICOS
SELECT email, (4+7) AS 'OPERACION' FROM usuarios order by  desc;

#sumarle 7 al id
SELECT email, (id+7) AS 'OPERACION' FROM usuarios order by  desc;
