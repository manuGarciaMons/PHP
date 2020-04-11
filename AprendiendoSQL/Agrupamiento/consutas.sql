#consultas de agrupamiento#
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT titulo.categoria_id FROM entradas GROUP BY categoria_id;
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

#consultas de agrupamiento con condiciones#
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id 
HAVING COUNT(titulo) >=4 ;
