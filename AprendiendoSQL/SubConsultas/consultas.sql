/**
- consultas que se ejecutan dentro de otras.
- consiste en utilizar los resultados de la subconsulta para operar en la
consulta principal
- Jugando con las claves ajenas/ foraneas
*/
/*sacar usuarios con entradas*/
SELECT * FROM usuarios
WHERE id IN (SELECT usuario_id FROM entradas);

SELECT usuario_id FROM entradas;

SELECT * FROM usuarios
WHERE id NOT IN (SELECT usuario_id FROM entradas);


/*sacar usuarios que tega alguna entrada que hable sobre gta*/
SELECT nombre, apellidos FROM usuarios WHERE id
IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

/*sacar todas las entradas de la categoria accion ytilizando su nombre*/
SELECT categoria_id, titulo FROM entradas 
WHERE categotia_id 
IN (SELECT id FROM categorias WHERE nombre = 'Accion');

/*mostrar las categorias con mas de 3 entradas*/
SELECT nombre FROM categorias WHERE 
id  IN(SELECT categoria_id FROM entradas
    GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

SELECT * FROM categorias WHERE 
id  IN(SELECT categoria_id FROM entradas
    GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

/*mostrar los usuarios que crearon una entrada un martes*/
SELECT * FROM  usuarios WHERE id IN
(SELECT usuario_id, titulo, fecha FROM entradas WHERE DAYOFWEEK(fecha)=3);

/*mostrar el nombre del usuario que tenga mas entradas*/
SELECT CONCAT(nombre, ' ', apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id =
(SELECT usuario_id,  COUNT(id) FROM entradas
 GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*mostrar las categorias sin entradas*/
SELECT * FROM categorias WHERE id NOT  IN 
(SELECT categoria_id FROM entradas);