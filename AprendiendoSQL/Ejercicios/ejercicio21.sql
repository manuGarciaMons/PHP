/*
Obtener los nombre y cuidades de los clientes con encargos  de 3 unidades en adelante

*/

SELECT nombre, ciudad FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >=3);