/**
Tipos de datos 
int(n) ENTERO
integer(n) ENTERO
varchar(n) ALFANUMERICO 
char(n) ALFANUMERICO
float(n, nro de decimales) DECIMAL
date, time, timestamp
text  65535 caracteres
mediumtext 16 millones caracteres
longtext 4 billones de caracteres


CREAR TABLA
*/

CREATE TABLE usuarios (
id     int(11),
nombre   varchar(100),
apellidos varchar(255),
email   varchar(100),
password varchar(255)
);
