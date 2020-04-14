/*
Visualizar el nombre y los apellidos de los vendedores
en una misma columan y su fecha de registro y que
dia de la semana cuando se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'nombre y apellidos',
fecha, DAYNAME(fecha) FROM vendedores;