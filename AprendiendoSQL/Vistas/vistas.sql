/*
consulta almacenada en la base de datos que se utiliza como una tabla virtual y no 
almacena datos sino que utiliza asociaciones y los datos originales de las tablas de forma que siempre
se mantiene actualizada.

*/
CREATE VIEW entradas_con_nombres AS
 SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
 FROM entradas e
 INNER JOIN usuarios u ON e.usuarios_id = u.id 
 INNER JOIN categotias.c ON e.categorias_id = c.id;


