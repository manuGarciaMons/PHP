/*
Sacar la media de sueldo etre todos los vendedores por grupo
*/

SELECT CEIL(AVG(v.sueldo)) AS 'Media salarial', g.nombre, g.ciudad FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;

