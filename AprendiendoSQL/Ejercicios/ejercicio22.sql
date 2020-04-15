/*
Mostrar listado de clientes  (numero de cliente y el nombre)
mostrar el numero de vendedor y su nombre
*/

SELECT c.id c.nombre v.id CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR'
 FROM clientes c, vendedor vendedor
 WHERE c.vendedor_id = v.id;