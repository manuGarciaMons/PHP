/*
Mostrar todos los vendedores y el numero de clientes
se debe mostrar tengan o no clientes
*/

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vededores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;