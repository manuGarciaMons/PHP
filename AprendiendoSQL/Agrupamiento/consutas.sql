#consultas de agrupamiento #
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT titulo.categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

#consultas de agrupamiento con condiciones#
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id 
HAVING COUNT(titulo) >=4 ;

/*
AVG sacar la media
COUNT contar el numero de leementos
MAX valor maximo del grupo
MIN valor minimo del grupo
SUM sumar todas las expresiones del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) 'MAXIMO ID', titulo FROM entradas;
SELECT MIN(id) 'MINIMO ID', titulo FROM entradas;
SELECT SUM(id) 'SUMA DE LOS ID', titulo FROM entradas;