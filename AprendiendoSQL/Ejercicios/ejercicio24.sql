/*
Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la cuidad, 
pero unicamente cuando sea de Barcelona
*/
SELECT e.id, co.modelo, c.nombre FROM encargos
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.cuidad = 'Barcelona';