/**
Sacara los vendodres que tienen jefe y sacar el nombre del jefe
*/

SELECT CONCAT(v1.nombre, ' ' , v1.apellidos) AS 'VENDEDOR ', CONCAT(v2.nombre, ' ', V2.apellidos) AS 'JEFE'
 FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;