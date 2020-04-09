#MOSTRAR TODOS LOS REGISTROS DE UNA TABLA#

SELECT * FROM usuarios;

#MOSTRAR REGISTROS O CAMPOS ESPECIFICOS DE UNA TABLA
SELECT email, nombre, apellidos FROM usuarios;

#OPERADORES ARICMETICOS
SELECT email, (4+7) AS 'OPERACION' FROM usuarios order by  desc;

#sumarle 7 al id
SELECT email, (id+7) AS 'OPERACION' FROM usuarios order by  desc;

#FUNCIONES MATEMATICAS 
SELECT ABS(7) AS 'OPERACION' FROM usuarios order by  desc;
SELECT FLOOR(2,4) AS 'OPERACION' FROM usuarios ;
SELECT ROUND(7,91, 1) AS 'OPERACION' FROM usuarios ;
SELECT SQRT(34,5) AS 'OPERACION' FROM usuarios ;
SELECT TRUNCATE(7,91,0) AS 'OPERACION' FROM usuarios ;
SELECT ROUND(id,2) AS 'OPERACION' FROM usuarios ;


#FUNCIONES PARA TEXTO#

SELECT  UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT email, LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;
SELECT TRIM(CONCAT('   ',nombre, ' ', apellidos)) AS 'CONVERSION' FROM usuarios;

SELECT email, fecha FROM usuarios;
SELECT email, fecha, CURDATE() FROM usuarios;
SELECT email, fecha, CURDATE() AS 'fecha actual' FROM usuarios;
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'fecha actual' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, MONTH(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, YEAR(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, DAY(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, HOUR(fecha) AS 'fecha actual' FROM usuarios;
SELECT email, CURTIME() AS 'fecha actual' FROM usuarios;
SELECT email, SYSDATE() AS 'fecha actual' FROM usuarios;
SELECT email, fecha FROM usuarios;
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT  DISTINCT USER() FROM usuarios;
SELECT  DISTINCT DATABASE() FROM usuarios;
SELECT  IFNULL(apellidos . 'ESTE CAMPO ESTA VACIO')FROM usuarios;
SELECT email, IFNULL(apellidos . 'ESTE CAMPO ESTA VACIO')FROM usuarios;



